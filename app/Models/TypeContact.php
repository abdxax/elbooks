<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeContact extends Model
{
    use HasFactory;
    
    public function Contacts(){
        return $this->hasMany(Contacts::class,"chapterId");
    }
}
