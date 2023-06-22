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
        Schema::table('police', function (Blueprint $table) {
            $table->unsignedBigInteger('campe_id')->nullable();
            $table->boolean('status')->nullable();

            $table->foreign('campe_id')
                  ->references('id')
                  ->on('campes');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('police', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('campe_id');

        });
    }
};