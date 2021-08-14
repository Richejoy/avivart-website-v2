<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $fillable = [
        'communication_category_id',
        'user_id',
        'content',
        'published',
    ];

    public function communicationCategory()
    {
        return $this->belongsTo(CommunicationCategory::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
