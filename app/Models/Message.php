<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'accountholder',
        'message',
        'is_read',
        'user_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
