<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = [
        'title',
        'difficulty',
        'estimated_time',
        'tech_stack',
        'description',
        'files',
        'user_id',
    ];

    protected $casts = [
        'tech_stack' => 'array',
        'files' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_exercise')->withTimestamps();
    }

    public function completedByUsers()
    {
        return $this->belongsToMany(User::class, 'exercise_user')
            ->withPivot(['completed_at'])
            ->withTimestamps();
    }
}
