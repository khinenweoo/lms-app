<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use SoftDeletes, HasFactory;

    const TABLE = 'courses';
    protected $table = self::TABLE;
    
    protected $primaryKey = 'id';

    public $fillable = [
        'name',
        'slug',
        'course_description',
        'category_id',
        'instructor_id',
        'course_requirements',
        'course_outcomes',
        'price',
        'course_image',
        'overview_video',
        'started_date',
        'end_date',
        'reg_close_date',
        'published',
        'free',
        'featured',
        'trending',
        'popular',
        'meta_keywords',
        'meta_description',
        'status'
    ];

    public static function search($search)
    {
        return empty($search)? static::query()
        : static::query()->where('id', 'like', '%'. $search.'%')
        ->orWhere('name', 'like', '%'.$search.'%')
        ->orWhere('course_description', 'like', '%'.$search.'%')
        ->orWhere('course_requirements', 'like', '%'.$search.'%');
    }
}
