<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Relations\HasMany;

class DigitalProduct extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'description',
        'short_description',
        'original_price',
        'sale_price',
        'sale_ends_at',
        'file_path',
        'original_filename',
        'file_size',
        'mime_type',
        'thumbnail_path',
        'images',
        'is_active',
        'sort_order',
    ];

    protected $casts = [
        'images' => 'array',
        'sale_ends_at' => 'datetime',
        'is_active' => 'boolean',
        'original_price' => 'decimal:2',
        'sale_price' => 'decimal:2',
        'file_size' => 'integer',
    ];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'digital_product_id');
    }

    public function getDiscountPercentageAttribute(): int
    {
        if ($this->original_price <= 0) {
            return 0;
        }
        return (int)(100 - ($this->sale_price / $this->original_price * 100));
    }

    public function getSaleIsActiveAttribute(): bool
    {
        if (!$this->sale_ends_at) {
            return true;
        }
        return Carbon::now()->lt($this->sale_ends_at);
    }

    public function getCurrentPriceAttribute(): float
    {
        return $this->sale_is_active ? $this->sale_price : $this->original_price;
    }
} 