<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes, HasFactory;


    const TABLE = 'categories';
    protected $table = self::TABLE;
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'slug',
        'icon',
        'description',
        'status'
    ];

    public function id(): int
    {
        return $this->id;
    }
    public function name(): string 
    {
        return $this->name;
    }
    public function slug(): string 
    {
        return $this->slug;
    }
    public function desc(): string 
    {
        return $this->description;
    }
    public function status(): int 
    {
        return $this->status;
    }
    public function createdAt(): string 
    {
        return $this->created_at->format('m/d/Y');
    }

    public static function search($search)
    {
        return empty($search)? static::query()
        : static::query()->where('id', 'like', '%'. $search.'%')
        ->orWhere('name', 'like', '%'.$search.'%')
        ->orWhere('created_at', 'like', '%'.$search.'%');
    }
}
