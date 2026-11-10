<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PublicNewsComment extends Model
{
    protected $table = 'public_news_comments';
    protected $primaryKey = 'id';

    protected $fillable = [
        'news_id',
        'commenter_name',
        'comment',
    ];

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id', 'news_id');
    }
}
