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
        Schema::create('campes', function (Blueprint $table) {
            $table->id();
            $table->string('campe_code')->nullable();
            $table->string('name',250)->unique();
            $table->text('address')->nullable();
            $table->string('location')->nullable();
            $table->softDeletes();
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campes');
    }
};
