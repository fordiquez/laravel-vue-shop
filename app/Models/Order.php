<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
