<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formula extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function currency()
    {
        return $this->belongsTo(Currency::class);
    }

    public function __toString()
    {
        return $this->name;
    }
}
