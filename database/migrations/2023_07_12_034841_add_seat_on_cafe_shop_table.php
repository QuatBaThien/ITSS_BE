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
        Schema::table('cafe_shops', function (Blueprint $table) {
            $table->integer('curr_seat')->nullable();
            $table->integer('max_seat')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cafe_shops', function (Blueprint $table) {
            $table->dropColumn(['curr_seat', 'max_seat']);
        });
    }
};
