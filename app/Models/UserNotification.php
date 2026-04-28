<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserNotification extends Model
{
    protected $fillable = [
        'user_id',
        'course_id',
        'module_id',
        'type',
        'title',
        'body',
        'data',
        'points',
        'read_at',
    ];

    protected $casts = [
        'read_at' => 'datetime',
        'points' => 'integer',
        'data' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}

