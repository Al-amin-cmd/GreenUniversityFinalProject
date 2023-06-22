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
        Schema::table('school_staff', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('school_id')->nullable();

            $table->foreign('school_id')->references('id')->on('schools')->onDelete('cascade');
            $table->softDeletes();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('school_staff', function (Blueprint $table) {
            //
            $table->dropColumn('school_id');
            $table->dropColumn('deleted_at');
        });
    }
};