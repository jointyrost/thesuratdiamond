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
            $table->string('name')->nullable();
            $table->string('country_code')->nullable();
            $table->unsignedBigInteger('country_id')->nullable(); // Assuming this will reference the countries table
            $table->string('payment_currency')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('email')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('street_address')->nullable();

            // Optionally, you can add a foreign key constraint for the country_id
            // Uncomment the following line if you want to enforce the foreign key constraint
            $table->foreign('country_id')->references('id')->on('countries')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('country_code');
            $table->dropColumn('country_id');
            $table->dropColumn('payment_currency');
            $table->dropColumn('mobile_number');
            $table->dropColumn('email');
            $table->dropColumn('state');
            $table->dropColumn('city');
            $table->dropColumn('street_address');
        });
    }
};
