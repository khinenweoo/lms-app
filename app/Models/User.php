<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use SoftDeletes;

    const TABLE = 'users';
    protected $table = self::TABLE;

    protected $primaryKey = 'id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'dob',
        'gender',
        'photo',
        'phone',
        'address',
        'about',
        'status',
    ];

    public function id(): int
    {
        return $this->id;
    }
    public function name(): string
    {
        return $this->name;
    }
    public function email(): string
    {
        return $this->email;
    }
    public function password(): string
    {
        return $this->password;
    }
    public function dob(): date
    {
        return $this->dob;
    }
    public function setDobAttribute($value)
    {
        $this->attributes['dob'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }

    public function getDobAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['dob'])->format('m/d/Y');
    }

    public function gender()
    {
        return $this->gender;
    }
    public function photo()
    {
        return $this->photo;
    }
    public function phone(): string
    {
        return $this->phone;
    }
    public function address(): string
    {
        return $this->address;
    }
    public function about(): string
    {
        return $this->about;
    }
    public function status()
    {
        return $this->status;
    }
    public function createdAt(): string
    {
        return $this->created_at->format('m/d/Y');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function search($search)
    {
        return empty($search)? static::query()
        : static::query()->where('id', 'like', '%'. $search.'%')
        ->orWhere('name', 'like', '%'.$search.'%')
        ->orWhere('email', 'like', '%'.$search.'%')
        ->orWhere('phone', 'like', '%'.$search.'%')
        ->orWhere('gender', 'like', '%'.$search.'%');
    }
}
