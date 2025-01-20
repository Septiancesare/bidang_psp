<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MemberData extends Model
{
    protected $table = 'member_data';
    protected $primaryKey = 'id_member';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_member',
        'name_member',
        'image_member',
        'position_member',
    ];

    
}
