<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Support\Facades\Request;

class Product extends Model implements Buyable
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description',
        'characteristics',
        'old_price',
        'new_price',
        'quantity',
        'on_discount',
        'published',
        'conversion_id',
        'product_type_id',
        'product_category_id',
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

    public function productCategory()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function productType()
    {
        return $this->belongsTo(ProductType::class);
    }

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function conversion()
    {
        return $this->belongsTo(Conversion::class);
    }

    public function getBuyableIdentifier($options = null) {
        return $this->id;
    }

    public function getBuyableDescription($options = null) {
        return $this->name;
    }

    public function getBuyablePrice($options = null) {
        return $this->new_price;
    }

    public function __toString()
    {
        return $this->name;
    }

    //for futured products filter in home
    public function getDataFilter(): string
    {
        return 'pt-' . mt_rand(1, $this->productType->id);
    }

    public function onDiscount(): string
    {
        return $this->on_discount ? 'badge-success' : 'badge-danger';
    }

    public function getPercentage(): float
    {
        return ceil(($this->new_price / $this->old_price) * 100) - 100;
    }

    public function getNewPrice(): string
    {
        return number_format($this->new_price, 2, '.', ' ') . ' ' . $this->currency->name;
    }

    public function getOldPrice(): string
    {
        return number_format($this->old_price, 2, '.', ' ') . ' ' . $this->currency->name;
    }

    public function phoneLink(): string
    {
        return "tel:+" . str_replace(' ', '', $this->user->longPhone());
    }

    public function whatsappLink(): string
    {
        return "https://web.whatsapp.com/send?phone=+" . str_replace(' ', '', $this->user->longPhone()) . "&text=Bonjour, j'ai trouvé votre produit sur AVIV'ART. Veuillez m'envoyer plus d'informations sur " . $this->name . ". Le produit se trouve ici : " . route('store.show', array('product' => $this->id));
    }

    public function telegramLink(): string
    {
        return "https://telegram.me/share/url?url=" . Request::url() . "&text=Bonjour, j'ai trouvé votre produit sur AVIV'ART. Veuillez m'envoyer plus d'informations sur " . $this->name . ". Le produit se trouve ici : " . route('store.show', array('product' => $this->id));
    }

    public function messageLink(): string
    {
        return "mailto:" . $this->user->email . "?subject=Annonce&body=Bonjour, j'ai trouvé votre produit sur AVIV'ART. Veuillez m'envoyer plus d'informations sur " . $this->name . ". Le produit se trouve ici : " . route('store.show', array('product' => $this->id));
    }
}
