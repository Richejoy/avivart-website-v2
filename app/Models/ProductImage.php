<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = null;

    public $table = 'products_images';

    protected $fillable = [
        'product_id', 'image_id',
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}