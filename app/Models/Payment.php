<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $guarded = [];

    protected $casts = [
        'created' => 'datetime',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
