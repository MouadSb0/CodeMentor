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
     * Returns the course image URL.
     */
    public function getImageAttribute($value): string
    {
        if ($value) {
            if (str_starts_with($value, 'http')) {
                return $value;
            }

            // Remove leading slash if any
            $value = ltrim($value, '/');

            // If it already starts with 'storage/', don't add it again
            if (str_starts_with($value, 'storage/')) {
                return asset($value);
            }

            return asset('storage/' . $value);
        }

        // Fallback gradient placeholder via picsum
        return 'https://picsum.photos/seed/' . ($this->id ?? 'default') . '/600/400';
    }

    /**
     * Alias for image attribute.
     */
    public function getThumbnailAttribute(): string
    {
        return $this->image;
    }
}
