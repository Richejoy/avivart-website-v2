<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductUser extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = null;

    public $table = 'products_users';

    protected $fillable = [
        'product_id', 'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
