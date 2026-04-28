<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = [
        'user_id',
        'course_name',
        'title',
        'time_limit',
        'passing_score',
        'questions',
    ];

    protected $casts = [
        'questions' => 'json',
    ];

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_quiz')->withTimestamps();
    }
}
