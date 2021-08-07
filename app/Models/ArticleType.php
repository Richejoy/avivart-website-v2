<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleType extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function articles()
    {
        return $this->hasMany(Article::class);
    }

    public function __toString()
    {
        return $this->name;
    }
}
