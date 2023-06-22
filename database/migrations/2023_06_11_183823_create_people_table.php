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
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('nid_code')->unique()->nullable();
            $table->string('first_name',100)->nullable();
            $table->string('middile_name',100)->nullable();
            $table->string('last_name',100)->nullable();
            $table->string('full_name_bangla',100)->nullable();
            $table->string('father_name',100)->nullable();
            $table->string('father_name_bangla',100)->nullable();
            $table->string('father_nid_no',100)->nullable();
            $table->string('mother_name',100)->nullable();
            $table->string('mother_name_bangla',100)->nullable();
            $table->string('mother_nid_no',100)->nullable();
            $table->string('spouses_name',100)->nullable();
            $table->string('spouses_name_bangla',100)->nullable();
            $table->string('spouses_nid_no',100)->nullable();
            $table->date('dob')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('birth_place',100)->nullable();
            $table->string('nationality',100)->nullable();
            $table->string('religion',100)->nullable();
            $table->string('blood_group',100)->nullable();
            $table->string('gender',100)->nullable();
            $table->string('eduction_level',100)->nullable();
            $table->string('befor_profession',100)->nullable();
            $table->string('disables',100)->nullable();
            $table->string('permament_village',100)->nullable();
            $table->string('permament_post_office',100)->nullable();
            $table->string('permament_post_code',100)->nullable();
            $table->string('permament_thana',100)->nullable();
            $table->string('permament_district',100)->nullable();
            $table->string('permament_division',100)->nullable();
            $table->string('present_campe_name',100)->nullable();
            $table->string('present_campe_address',100)->nullable();
            $table->string('present_campe_location',100)->nullable();
            $table->string('image')->nullable();
            $table->string('document')->nullable();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('people');
    }
};