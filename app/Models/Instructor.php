<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class Instructor extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    use SoftDeletes;

    const TABLE = 'instructors';
    protected $table = self::TABLE;
    
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $fillable = [
        'name',
        'email',
        'password',
        'dateofbirth',
        'gender',
        'photo',
        'phone',
        'address',
        'about',
        'facebook_link',
        'twitter_link',
        'linkedin_link',
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
    public function email(): string 
    {
        return $this->email;
    }
    public function password(): string 
    {
        return $this->password;
    }
    public function dateofbirth(): date 
    {
        return $this->dateofbirth;
    }

    public function setDateofbirthAttribute($value)
    {
        $this->attributes['dateofbirth'] = Carbon::createFromFormat('m/d/Y', $value)->format('Y-m-d');
    }

    public function getDateofbirthAttribute()
    {
        return Carbon::createFromFormat('Y-m-d', $this->attributes['dateofbirth'])->format('m/d/Y');
    }

    public function gender()
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
    public function status(): int 
    {
        return $this->status;
    }

    public function createdAt(): string 
    {
        return $this->created_at->format('m/d/Y');
    }

    // modify attribute when we get this
    public function getNameAttribute($name)
    {
        return ucfirst($name);
    }

    // change the password when insert into db using mutator
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = bcrypt($password);
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

    public function scopeSearch($query, $term)
    {
        $term = "%$term%";
        $query->where(function($query) use ($term) {
            $query->where('name', 'like', $term)
            ->orWhere('email', 'like', $term)
            ->orWhere('phone', 'like', $term)
            ->orWhere('gender', 'like', $term);
        });
    }

    /**
     * Get all of the Courses for the Instructor
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany(Course::class);
    }


}
