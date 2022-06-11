<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    //many to one
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function reviews() {
        return $this->hasMany(Comment::class);
    }

}
