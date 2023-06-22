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
        Schema::table('hostipal_staff', function (Blueprint $table) {
            //
            $table->unsignedBigInteger('hostipal_id')->nullable();

            $table->foreign('hostipal_id')->references('id')->on('hostipals')->onDelete('cascade');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hostipal_staff', function (Blueprint $table) {

            $table->dropColumn('hostipal_id');
            $table->dropColumn('deleted_at');

        });
    }
};