<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'category',
        'description',
        'image',
        'user_id',
        'level',
        'duration',
        'price',
        'rating',
        'modules_count',
        'lessons_count',
        'is_premium',
    ];

    protected $casts = [
        'is_premium' => 'boolean',
        'price'      => 'float',
        'rating'     => 'float',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }

    public function enrolledUsers()
    {
        return $this->belongsToMany(User::class, 'course_user')
            ->withPivot(['enrolled_at'])
            ->withTimestamps();
    }

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'course_exercise')->withTimestamps();
    }

    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class, 'course_quiz')->withTimestamps();
    }

    /**
     * Returns the display price label.
     */
    public function getPriceLabelAttribute(): string
    {
        return $this->price ? '$' . number_format($this->price, 2) : 'FREE';
    }

    /**
     * Returns the course thumbnail URL.
     */
    public function getThumbnailAttribute(): string
    {
        if ($this->image) {
            return str_starts_with($this->image, 'http')
                ? $this->image
                : asset('storage/' . $this->image);
        }
        // Fallback gradient placeholder via picsum
        return 'https://picsum.photos/seed/' . $this->id . '/600/400';
    }
}
