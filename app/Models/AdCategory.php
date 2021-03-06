<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdCategory extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function adRay()
    {
        return $this->belongsTo(AdRay::class);
    }

    public function ads()
    {
        return $this->hasMany(Ad::class);
    }

    public function __toString()
    {
        return $this->name;
    }

    public function getSelected($adCategoryId = 0): string
    {
        return ($this->id == $adCategoryId) ? 'text-success font-weight-bold' : 'text-muted';
    }
}
