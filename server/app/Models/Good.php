<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        return $this->belongsToMany(Tag::class, 'good_tag', 'good_id', 'tag_id');
    }

    public function attributes(): BelongsToMany
    {
        return $this->belongsToMany(Attribute::class, 'good_attribute', 'good_id', 'attribute_id');
    }

    public function goodImages(): HasMany
    {
        return $this->hasMany(GoodImage::class);
    }

    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
