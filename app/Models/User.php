<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'github_account',
        'password',
        'role',
        'points',
        'last_bonus_at',
        'institution',
        'specialization',
        'bio',
        'photo',
        'language',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'last_bonus_at' => 'datetime',
        ];
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function enrolledCourses()
    {
        return $this->belongsToMany(Course::class, 'course_user')
            ->withPivot(['enrolled_at'])
            ->withTimestamps();
    }

    public function completedModules()
    {
        return $this->belongsToMany(Module::class, 'module_user')
            ->withPivot(['course_id', 'points_awarded', 'completed_at'])
            ->withTimestamps();
    }

    public function notifications()
    {
        return $this->hasMany(UserNotification::class)->latest();
    }

    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }

    /** Groups this user created (is admin of). */
    public function ownedGroups()
    {
        return $this->hasMany(Group::class, 'admin_id');
    }

    /** Groups this user has joined as a member. */
    public function memberGroups()
    {
        return $this->belongsToMany(Group::class, 'group_user')->withTimestamps();
    }

    public function discussions()
    {
        return $this->hasMany(Disccussion::class);
    }

    public function achievements()
    {
        return $this->hasMany(Achivement::class);
    }
}
