<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'user_id',
        'delivery_method',
        'pay_method',
        'promocode_id',
        'goods_cost',
        'delivery_cost',
        'total_cost',
    ];

    public static array $deliveryMethods = [
        'Courier',
        'Self-delivery from Meest',
        'Self-delivery from Ukrposhta',
        'Self-delivery from Nova Poshta'
    ];

    public static array $payMethods = [
        'Payment upon receipt of goods',
        'Pay now',
        'Cashless for legal entities',
        'Payment for legal entities through a current account',
        'Pay online with the social card "Baby package"',
        'Cashless for individuals',
        'Payment for individuals through a current account',
        'PrivatPay',
        'Credit and payment in installments',
        'Issuance of loans in partner banks'
    ];

    public function goods(): BelongsToMany
    {
        return $this->belongsToMany(Good::class, 'good_order', 'order_id', 'good_id');
    }

    public function orderHistories(): HasMany
    {
        return $this->hasMany(OrderHistory::class);
    }
}
