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
        Schema::table('blogs', function (Blueprint $table) {
            $table->text('para1')->change();
            $table->text('para2')->change();
            $table->text('para3')->change();
            $table->text('comment')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->string('para1', 255)->change();
            $table->string('para2', 255)->change();
            $table->string('para3', 255)->change();
            $table->string('comment', 255)->change();
        });
    }
};
