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
            // Note: You cannot directly modify enum values in MySQL.
            // One workaround is to drop the column and create it again with the new values.

            $table->enum('status', ['pending', 'processing', 'completed', 'cancelled', 'shipped'])
                ->default('pending')
                ->change(); // Use change() instead of dropColumn/addColumn

            // Add track_id column
            $table->string('track_id')->nullable()->after('payment_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->enum('status', ['pending', 'processing', 'completed', 'cancelled'])
                ->default('pending')
                ->change(); // Change back to the original enum values

            $table->dropColumn('track_id'); // Drop track_id column if rolling back
        });
    }
};
