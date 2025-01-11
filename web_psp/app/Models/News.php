<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'id_news';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_news',
        'title_news',
        'image_news',
        'content_news',
        'creator',

    ];

    public function newsComment()
    {
        return $this->hasMany(NewsComment::class);
    }
}
