<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = null;

    protected $fillable = ['first_name', 'last_name', 'email', 'phone', 'contact_topic_id', 'message'];

    public function fullName()
    {
        return $this->last_name . ' ' . $this->first_name;
    }

    public function contactTopic()
    {
        return $this->belongsTo(ContactTopic::class);
    }

    protected $casts = [
        'created' => 'datetime',
    ];
}
