<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PembiayaanLahanAir extends Model
{
    protected $fillable = ['id', 'judul', 'deskripsi', 'gambar', 'waktu'];
}
