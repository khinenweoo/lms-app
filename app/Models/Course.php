<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Course extends Model
{
    use SoftDeletes, HasFactory;

    const TABLE = 'courses';
    protected $table = self::TABLE;
    
    protected $primaryKey = 'id';

    public $fillable = [
        'name',
        'slug',
        'short_description',
        'course_description',
        'course_requirements',
        'course_outcomes',
        'cover_image',
        'category_id',
        'instructor_id',
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
