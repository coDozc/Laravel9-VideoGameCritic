<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function user() {
        return $this->belongsTo(User::Class);
    }
    public function game() {
        return $this->belongsTo(Game::Class);
    }
}
