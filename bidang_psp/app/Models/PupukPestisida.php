<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PupukPestisida extends Model
{
    protected $fillable = ['id', 'judul', 'deskripsi', 'gambar', 'waktu'];
}
