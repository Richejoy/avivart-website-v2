<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleImage extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = null;

    public $table = 'articles_images';

    protected $fillable = [
        'article_id', 'image_id',
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
