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
        Schema::create('libraries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('stu_id')->constrained('students')
            ->cascaseOnUpdate()
            ->casecadeOnDelete();
            $table->string('book');
            $table->date('due_date')->nullable();
            $table->boolean('status')->comment('1 for Return 0 for not Return');

            // $table->unsignedBigInteger('stu_id');
            // $table->foreign('stu_id')
            // ->references('id')
            // ->on('students')
            // ->cascaseOnUpdate()
            // ->cascaseOnDelete();
            // $table->string('book');
            // $table->date('due_date')->nullable();
            // $table->boolean('status')->comment('1 for Return 0 for not Return');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('libraries');
    }
};
