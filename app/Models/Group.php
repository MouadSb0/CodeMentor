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
}
