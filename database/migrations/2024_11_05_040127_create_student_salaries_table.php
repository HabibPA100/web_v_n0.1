<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('student_salaries', function (Blueprint $table) {
        $table->id();
        $table->integer('amount');
        $table->string('month_name');
        $table->string('transaction_number')->unique();
        $table->string('student_name');
        $table->string('class_name');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_salaries');
    }
};
