<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('digital_product_id')->constrained()->onDelete('restrict');
            $table->string('order_number')->unique();
            $table->string('customer_name');
            $table->string('customer_email');
            $table->decimal('amount', 10, 2);
            $table->string('razorpay_payment_id')->unique();
            $table->string('razorpay_order_id')->unique();
            $table->string('razorpay_signature')->unique();
            $table->string('status')->default('completed');
            $table->timestamp('downloaded_at')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('orders');
    }
}; 