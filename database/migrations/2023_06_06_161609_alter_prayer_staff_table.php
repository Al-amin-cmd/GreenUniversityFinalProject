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
        Schema::table('prayer_staff', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('prayer_places_id')->nullable();

            $table->foreign('prayer_places_id')->references('id')->on('prayer_places')->onDelete('cascade');
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prayer_staff', function (Blueprint $table) {
            //
            $table->dropColumn('prayer_places_id');
            $table->dropColumn('deleted_at');
        });
    }
};