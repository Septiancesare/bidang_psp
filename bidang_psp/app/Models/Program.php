<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';
    protected $primaryKey = 'id_program';
    public $incrementing = true;
    protected $keyType = 'int';
    protected $fillable = ['id_program', 'image_program', 'name_program', 'description_program'];
}
