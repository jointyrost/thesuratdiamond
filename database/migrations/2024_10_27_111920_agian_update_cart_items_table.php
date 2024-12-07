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

        Schema::table('cart_items', function (Blueprint $table) {
            // Only add the product_type column if it doesn't already exist
            if (!Schema::hasColumn('cart_items', 'product_type')) {
                $table->string('product_type')->nullable();
            }

            // Make product_id nullable as it can now relate to different tables
            $table->unsignedBigInteger('product_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cart_items', function (Blueprint $table) {
            // Remove product_type column if rolling back
            if (Schema::hasColumn('cart_items', 'product_type')) {
                $table->dropColumn('product_type');
            }

            // Restore product_id constraint if rolling back
            $table->unsignedBigInteger('product_id')->nullable(false)->change();
            $table->foreign('product_id')->references('id')->on('rings')->onDelete('cascade');
        });
    }
};
