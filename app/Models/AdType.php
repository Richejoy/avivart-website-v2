<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdType extends Model
{
    use HasFactory;

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function __toString()
    {
        return $this->name;
    }
}
