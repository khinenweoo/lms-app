<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const TABLE = 'admins';
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
    public function gender(): enum
    {
        return $this->gender;
    }
    public function photo(): string
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
    public function about(): text
    {
        return $this->about;
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
}
