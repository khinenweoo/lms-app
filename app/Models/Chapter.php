<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;


    const TABLE = 'chapters';
    protected $table = self::TABLE;

    protected $primaryKey = 'id';

    protected $fillable = [
        'course_id',
        'name',
        'status',
        'position'
    ];

    public function id(): int
    {
        return $this->id;
    }
    public function name(): string 
    {
        return $this->name;
    }
    public function status()
    {
        return $this->status;
    }
    public function position(): int
    {
        return $this->position;
    }

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function($query) use ($term) {
            $query->where('name', 'like', $term);
        });
    }

    /**
     * Get the course that relate to the Chapter
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
