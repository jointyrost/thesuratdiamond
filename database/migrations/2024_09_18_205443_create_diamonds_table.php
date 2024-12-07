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
        Schema::create('diamonds', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('stoneType')->nullable();
            $table->string('process')->nullable();
            $table->string('diamond_category')->nullable();
            $table->string('size_type')->nullable();
            $table->string('generalSize')->nullable();
            $table->string('sieveSize')->nullable();
            $table->text('name')->nullable();
            $table->string('product_id')->nullable();
            $table->string('shape')->nullable();
            $table->string('color_category')->nullable();
            $table->string('d_to_z_selection')->nullable();
            $table->string('general_options')->nullable();
            $table->string('fancy_color')->nullable();
            $table->string('fancy_intensity')->nullable();
            $table->string('treated_color')->nullable();
            $table->string('stone_clarity')->nullable();
            $table->string('stone_carat')->nullable();
            $table->string('natts')->nullable();
            $table->string('bgm')->nullable();
            $table->string('cut')->nullable();
            $table->string('fluorescence')->nullable();
            $table->string('length')->nullable();
            $table->string('width')->nullable();
            $table->string('depth')->nullable();
            $table->decimal('price_per_carat', 15, 2)->nullable();
            $table->decimal('stone_user_price', 15, 2)->nullable();
            $table->decimal('stone_wholesaler_price', 15, 2)->nullable();
            $table->string('stone_image')->nullable();
            $table->string('terms')->nullable();
            $table->string('remarks')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diamonds');
    }
};
