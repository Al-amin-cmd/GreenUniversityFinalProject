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
            $table->unsignedBigInteger('police_station_id')->nullable();

            $table->foreign('police_station_id')->references('id')->on('police_stations')->onDelete('cascade');

            $table->string('ploice_code')->nullable()->after('name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('police', function (Blueprint $table) {
            //
            $table->dropColumn('police_station_id');
            $table->dropColumn('ploice_code');
        });
    }
};