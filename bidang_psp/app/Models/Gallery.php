<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
    protected $fillable = ['name', 'file'];

    public function getFilePathAttribute()
    {
        return 'storage/uploads' . $this->file;
    }
}
