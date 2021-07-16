<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ad extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'characteristics',
        'price',
        'is_vip',
        'published',
        'expire_date',
        'ad_type_id',
        'ad_category_id',
        'currency_id',
        'user_id',
        'image_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function adCategory()
    {
        return $this->belongsTo(AdCategory::class);
    }

    public function adType()
    {
        return $this->belongsTo(AdType::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function __toString()
    {
        return $this->name;
    }

    //for futured ads filter in home
    public function getDataFilter(): string
    {
        return 'pt-' . mt_rand(1, $this->adType->id);
    }

    public function isVIP()
    {
        return $this->is_vip ? 'badge-success' : 'badge-danger';
    }

    public function getPrice()
    {
        return $this->price . ' ' . $this->currency->name;
    }
}
