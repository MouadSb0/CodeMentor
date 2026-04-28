<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'course_id',
        'title',
        'description',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function completedByUsers()
    {
        return $this->belongsToMany(User::class, 'module_user')
            ->withPivot(['course_id', 'points_awarded', 'completed_at'])
            ->withTimestamps();
    }
}
