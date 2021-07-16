<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdImage extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = null;

    public $table = 'ads_images';

    protected $fillable = [
        'ad_id', 'image_id',
    ];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }
}
