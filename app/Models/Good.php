<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Good extends Model
{
    use HasFactory;

    protected $fillable = [
        'vendor_code',
        'title',
        'slug',
        'category_id',
        'description',
        'short_description',
        'warning_description',
        'old_price',
        'price',
        'quantity',
        'status_id'
    ];

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(GoodTag::class, 'good_tag', 'good_id', 'tag_id');
    }
}
