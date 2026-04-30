<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['name', 'description', 'admin_id', 'cover_photo'];

    /** The user who created and administrates this group. */
    public function admin()
    {
        return $this->belongsTo(User::class, 'admin_id');
    }

    /** All members who joined this group (pivot: group_user). */
    public function members()
    {
        return $this->belongsToMany(User::class, 'group_user')->withTimestamps();
    }

    /** Discussions posted inside this group. */
    public function discussions()
    {
        return $this->hasMany(Disccussion::class)->latest();
    }

    /**
     * Get the group's cover photo URL.
     */
    public function getCoverPhotoAttribute($value): string
    {
        if ($value) {
            if (str_starts_with($value, 'http')) {
                return $value;
            }
            $value = ltrim($value, '/');
            if (str_starts_with($value, 'storage/')) {
                return asset($value);
            }
            return asset('storage/' . $value);
        }

        return 'https://picsum.photos/seed/' . $this->id . '/800/300';
    }
}
