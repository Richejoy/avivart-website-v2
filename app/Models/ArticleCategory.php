<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function articleRay()
    {
        return $this->belongsTo(ArticleRay::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getSelected($articleCategoryId = 0): string
    {
        return ($this->id == $articleCategoryId) ? 'text-info font-weight-bold' : 'text-muted';
    }
}
