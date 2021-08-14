<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function productRay()
    {
        return $this->belongsTo(ProductRay::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getSelected($productCategoryId = 0): string
    {
        return ($this->id == $productCategoryId) ? 'text-info font-weight-bold' : 'text-muted';
    }
}
