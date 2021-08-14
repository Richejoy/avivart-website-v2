<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class Ad extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

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

    public function isVIP(): string
    {
        return $this->is_vip ? 'badge-success' : 'badge-danger';
    }

    public function getPrice(): string
    {
        return number_format($this->price, 2, '.', ' ') . ' ' . $this->currency->name;
    }

    public function phoneLink(): string
    {
        return "tel:+" . str_replace(' ', '', $this->user->longPhone());
    }

    public function whatsappLink(): string
    {
        return "https://web.whatsapp.com/send?phone=+" . str_replace(' ', '', $this->user->longPhone()) . "&text=Bonjour, j'ai trouvé votre annonce sur AVIV'ART. Veuillez m'envoyer plus d'informations sur " . $this->name . ". L'annonce se trouve ici : " . route('ad.show', array('ad' => $this->id));
    }

    public function telegramLink(): string
    {
        return "https://telegram.me/share/url?url=" . Request::url() . "&text=Bonjour, j'ai trouvé votre annonce sur AVIV'ART. Veuillez m'envoyer plus d'informations sur " . $this->name . ". L'annonce se trouve ici : " . route('ad.show', array('ad' => $this->id));
    }

    public function messageLink(): string
    {
        return "mailto:" . $this->user->email . "?subject=Annonce&body=Bonjour, j'ai trouvé votre annonce sur AVIV'ART. Veuillez m'envoyer plus d'informations sur " . $this->name . ". L'annonce se trouve ici : " . route('ad.show', array('ad' => $this->id));
    }
}
