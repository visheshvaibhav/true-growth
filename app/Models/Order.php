<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Order extends Model
{
    protected $fillable = [
        'digital_product_id',
        'order_number',
        'customer_name',
        'customer_email',
        'customer_phone',
        'amount',
        'original_amount',
        'discount_amount',
        'coupon_code',
        'razorpay_payment_id',
        'razorpay_order_id',
        'razorpay_signature',
        'status',
        'downloaded_at',
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'original_amount' => 'decimal:2',
        'discount_amount' => 'decimal:2',
        'downloaded_at' => 'datetime',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($order) {
            if (!$order->order_number) {
                $order->order_number = static::generateOrderNumber();
            }
        });
    }

    public static function generateOrderNumber(): string
    {
        do {
            $number = 'TG-' . strtoupper(Str::random(10));
        } while (static::where('order_number', $number)->exists());

        return $number;
    }

    public function digitalProduct(): BelongsTo
    {
        return $this->belongsTo(DigitalProduct::class);
    }

    public function getDownloadUrl(): string
    {
        return route('download.product', [
            'order' => $this->order_number,
        ]);
    }
} 