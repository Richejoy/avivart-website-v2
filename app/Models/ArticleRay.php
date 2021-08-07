<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleRay extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function articleCategories()
    {
        return $this->hasMany(ArticleCategory::class)->orderBy('name');
    }

    public function __toString()
    {
        return $this->name;
    }
}
