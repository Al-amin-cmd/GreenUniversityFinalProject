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
        Schema::table('prayer_places', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('campe_id')->nullable();

            $table->foreign('campe_id')->references('id')->on('campes')->onDelete('cascade');

            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prayer_places', function (Blueprint $table) {
            //
            $table->dropColumn('campe_id');
            $table->dropColumn('deleted_at');
        });
    }
};