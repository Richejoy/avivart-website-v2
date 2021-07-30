<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Order extends Model
{
    use HasFactory;

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    protected $guarded = [];

    protected $casts = [
        'created' => 'datetime',
        'modified' => 'datetime',
    ];

    protected $attributes = [
        'payment_mode_id' => 1,
        'order_state_id' => 1,
        'paid' => 0,
    ];

    public function coupon()
    {
        return $this->belongsTo(Coupon::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderState()
    {
        return $this->belongsTo(OrderState::class);
    }

    public function paymentMode()
    {
        return $this->belongsTo(PaymentMode::class);
    }

    public function productsOrders()
    {
        return $this->hasMany(ProductOrder::class);
    }

    public function getNumber(): int
    {
        return $this->id . Carbon::parse($this->created)->format('dmYHis');
    }

    public function paid(): string
    {
        return $this->paid ? 'Oui' : 'Non';
    }
}
