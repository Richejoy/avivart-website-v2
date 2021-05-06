<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'token'];

    public function fullName()
    {
        return $this->last_name . ' ' . $this->first_name;
    }

    protected $casts = [
        'created' => 'datetime',
        'modified' => 'datetime',
    ];
}
