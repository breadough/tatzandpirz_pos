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
        Schema::create('records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_id');
            $table->string('appointment_id', 20)->nullable();
            $table->string('details', 50);
            $table->string('placement', 30)->nullable();
            $table->foreignId('artist_id');
            $table->string('customer_name', 50); //to support soon
            $table->string('notes')->nullable();
            $table->decimal('price_total', 6, 0);
            $table->decimal('price_shop', 6, 0);
            $table->decimal('price_artist', 6, 0);
            $table->string('receipt_number', 20)->unique();
            $table->string('image_attachment', 100)->nullable();
            $table->string('waiver_attachment', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};