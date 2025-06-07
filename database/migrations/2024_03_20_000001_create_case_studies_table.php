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
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('category');
            $table->string('timeframe');
            $table->string('roi');
            $table->string('team_size');
            $table->date('completion_date');
            $table->text('overview');
            $table->text('client_description');
            $table->text('challenge');
            $table->text('solution');
            $table->text('detailed_results');
            $table->foreignId('related_to_id')->nullable()->constrained('case_studies')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('case_studies');
    }
}; 