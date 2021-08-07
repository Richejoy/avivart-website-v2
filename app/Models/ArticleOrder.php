<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleOrder extends Model
{
    use HasFactory;

    public $timestamps = false;

    public $table = 'articles_orders';

    protected $fillable = [
        'article_id', 'order_id', 'quantity',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
