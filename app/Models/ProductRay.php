<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductRay extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function productCategories()
    {
        return $this->hasMany(ProductCategory::class)->orderBy('name');
    }

    public function __toString()
    {
        return $this->name;
    }
}
