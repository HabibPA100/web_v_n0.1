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
        Schema::create('admission_forms', function (Blueprint $table) {
            $table->id();
            $table->string('studentName');
            $table->date('studentDoB');
            $table->string('birthCertificate', 17);
            $table->string('father');
            $table->string('fNidNumber', 17);
            $table->date('fatherDoB');
            $table->string('fatherOccupation');
            $table->string('mother');
            $table->string('mNidNumber', 17);
            $table->date('motherDoB');
            $table->string('motherOccupation');
            $table->string('nationality')->default('বাংলাদেশী');
            $table->string('phone', 14);
            $table->text('permanentAddress');
            $table->text('currentAddress');
            $table->string('class_name');
            $table->string('referName')->nullable();
            $table->string('connectionWithRefer')->nullable();
            $table->text('referAddress')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_forms');
    }
};
