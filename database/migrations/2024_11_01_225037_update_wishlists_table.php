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
        Schema::table('wishlists', function (Blueprint $table) {
            $table->dropForeign(['product_id']); // Adjust 'product_id' if necessary
            $table->string('product_type')->after('product_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('wishlists', function (Blueprint $table) {
            // Remove the 'product_type' column
            $table->dropColumn('product_type');

            // Re-add the foreign key constraint on 'product_id' pointing to 'rings' table
            $table->foreign('product_id')
                ->references('id')
                ->on('rings')
                ->onDelete('cascade');
        });
    }
};
