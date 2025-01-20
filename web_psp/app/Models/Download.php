<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Download extends Model
{
    protected $fillable = ['id', 'title', 'file', 'size', 'type'];

    public function getFilePathAttribute()
    {
        return 'storage/uploads' . $this->file;
    }
}
