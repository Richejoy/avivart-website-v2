<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Civility extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function __toString()
    {
        return $this->name . ' ( ' . $this->gender->name . ' )';
    }
}
