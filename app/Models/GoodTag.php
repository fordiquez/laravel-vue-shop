<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodTag extends Model
{
    use HasFactory;

    protected $fillable = [
        'good_id',
        'tag_id'
    ];

    protected $table = 'good_tag';
}
