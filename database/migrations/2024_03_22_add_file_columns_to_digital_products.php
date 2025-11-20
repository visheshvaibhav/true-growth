<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('digital_products', function (Blueprint $table) {
            $table->string('original_filename')->nullable()->after('file_path');
            $table->bigInteger('file_size')->nullable()->after('original_filename');
            $table->string('mime_type')->nullable()->after('file_size');
        });
    }

    public function down()
    {
        Schema::table('digital_products', function (Blueprint $table) {
            $table->dropColumn(['original_filename', 'file_size', 'mime_type']);
        });
    }
}; 