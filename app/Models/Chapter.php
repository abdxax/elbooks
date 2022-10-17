<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    public function Book(){
        return $this->belongsTo(Book::class,"bookId");
    }

    public function Contacts(){
        return $this->hasMany(Contacts::class,"chapterId");
    }

    public function Note(){
        return $this->hasMany(Note::class,"chapterId");
    }
}
