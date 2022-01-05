<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubric extends Model
{
    use HasFactory;

    // hasOne - один к одному связь
    public function post(){
        return $this->hasOne(Post::class);
    }
}
