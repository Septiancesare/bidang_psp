<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $primaryKey = 'news_id';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'news_id',
        'title_news',
        'image_news',
        'content_news',
        'creator',
    ];

    public function publicComments()
    {
        return $this->hasMany(\App\Models\PublicNewsComment::class, 'news_id', 'news_id');
    }

}
