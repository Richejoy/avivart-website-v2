<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $guarded = [];

    protected $casts = [
        'created' => 'datetime',
        'modified' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
