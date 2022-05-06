<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Course extends Model
{
    use SoftDeletes, HasFactory;
    
    protected $primaryKey = 'id';

    public $fillable = [
        'category_id',
        'instructor_id',
        'name',
        'slug',
        'short_description',
        'course_description',
        'course_requirements',
        'course_outcomes',
        'cover_image',
        'is_free',
        'course_fee',
        'duration_length',
        'started_date',
        'end_date',
        'enroll_close_date',
        'published',
        'featured',
        'trending',
        'popular',
        'status'
    ];
  

    /**
     * Get the instructor that owns the course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function instructor()
    {
        return $this->belongsTo(instructor::class, 'instructor_id');
    }

    /**
     * Get the category that relate with the course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }

    /**
     * Get all of the chapters for the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function chapters()
    {
        return $this->hasMany(Chapter::class, 'course_id');
    }

    public function scopeOfTeacher($query)
    {
        return $query->where('instructor_id', Auth::user()->id);
    }

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function($query) use ($term) {
            $query->where('name', 'like', $term)
            ->orWhere('short_description', 'like', $term)
            ->orWhereHas('instructor', function($query) use ($term) {
                $query->where('name', 'like', $term);
            })
            ->orWhereHas('category', function($query) use ($term) {
                $query->where('name', 'like', $term);
            });
        });
    }
}
