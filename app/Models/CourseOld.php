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
    
    public function setStartedDateAttribute($value)
    {
        $this->attributes['started_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }

    public function getStartedDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['started_date'])->format('m/d/Y');
    }

    public function setEndDateAttribute($value)
    {
        $this->attributes['end_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }

    public function getEndDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['end_date'])->format('m/d/Y');
    }

    public function setEnrollCloseDateAttribute($value)
    {
        $this->attributes['enroll_close_date'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }

    public function getEnrollCloseDateAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['enroll_close_date'])->format('m/d/Y');
    }

    public static function search($search)
    {
        return empty($search)? static::query()
        : static::query()->where('id', 'like', '%'. $search.'%')
        ->orWhere('name', 'like', '%'.$search.'%')
        ->orWhere('course_description', 'like', '%'.$search.'%')
        ->orWhere('course_requirements', 'like', '%'.$search.'%');
    }

    /**
     * Get the instructor that owns the course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function instructor(): BelongsTo
    {
        return $this->belongsTo(instructor::class, 'instructor_id');
    }

    /**
     * Get the category that relate with the course
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
