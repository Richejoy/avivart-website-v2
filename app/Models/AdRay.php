<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdRay extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function adCategories()
    {
        return $this->hasMany(AdCategory::class)->orderBy('name');
    }

    public function __toString()
    {
        return $this->name;
    }
}