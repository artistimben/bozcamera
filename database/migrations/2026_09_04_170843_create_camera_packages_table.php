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
        Schema::create('camera_packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->unsignedSmallInteger('camera_count');
            $table->string('camera_type');
            $table->string('resolution');
            $table->string('storage_info');
            $table->decimal('equipment_price', 10, 2);
            $table->decimal('installation_price', 10, 2);
            $table->decimal('total_price', 10, 2);
            $table->string('badge')->nullable();
            $table->json('features');
            $table->boolean('is_popular')->default(false);
            $table->unsignedInteger('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camera_packages');
    }
};
