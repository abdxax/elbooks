<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function Chapters(){
        return $this->hasMany(Chapters::class,"bookId");
    }

    public function User(){
        return $this->belongsTo(User::class,"user_id");
    }

   
}
