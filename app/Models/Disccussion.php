<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Disccussion extends Model
{
    protected $fillable = ['user_id', 'title', 'content', 'category', 'group_id', 'attachment_url', 'attachment_type', 'attachment_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'disccussion_id')->latest();
    }

    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
