<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            // Make razorpay_payment_id nullable
            $table->string('razorpay_payment_id')->nullable()->change();
            
            // Make razorpay_signature nullable
            $table->string('razorpay_signature')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            // Revert changes (make not nullable again)
            $table->string('razorpay_payment_id')->nullable(false)->change();
            $table->string('razorpay_signature')->nullable(false)->change();
        });
    }
}; 