<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['user_id', 'disccussion_id', 'content'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function disccussion()
    {
        return $this->belongsTo(Disccussion::class);
    }

    public function reactions()
    {
        return $this->hasMany(CommentReaction::class);
    }

    public function userReaction()
    {
        return $this->hasOne(CommentReaction::class)->where('user_id', auth()->id());
    }
}
