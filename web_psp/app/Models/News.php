<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public function newsComment(){
        return $this->hasMany(NewsComment::class);
    }
}
