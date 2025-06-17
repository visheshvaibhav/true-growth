<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('customer_phone')->nullable()->after('customer_email');
            $table->decimal('original_amount', 10, 2)->after('amount');
            $table->decimal('discount_amount', 10, 2)->default(0)->after('original_amount');
            $table->string('coupon_code')->nullable()->after('discount_amount');
        });
    }

    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->string('razorpay_signature');
            $table->dropColumn([
                'order_number',
                'customer_phone',
                'original_amount',
                'discount_amount',
                'coupon_code',
                'status'
            ]);
        });
    }
}; 
