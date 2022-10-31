<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'good_id',
        'order_id'
    ];
}
