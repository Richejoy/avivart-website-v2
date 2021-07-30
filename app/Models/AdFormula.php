<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdFormula extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = [
        'ad_id', 'formula_id', 'paid',
    ];

    public function ad()
    {
        return $this->belongsTo(Ad::class);
    }

    public function formula()
    {
        return $this->belongsTo(Formula::class);
    }
}
