<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GroupInvitation extends Model
{
    protected $fillable = ['group_id', 'user_id', 'invited_by', 'status'];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'invited_by');
    }
}
