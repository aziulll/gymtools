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
            Schema::create('training_groups', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('id_training');
                $table->unsignedBigInteger('id_patient');
                $table->unsignedBigInteger('id_exercise');
                $table->unsignedBigInteger('create_for');
                $table->foreign('id_exercise')->references('id')->on('exercises')->onDelete('cascade');
                $table->foreign('create_for')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('id_training')->references('id')->on('trainings')->onDelete('cascade');
                $table->foreign('id_patient')->references('id')->on('patients')->onDelete('cascade');
                $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('training_groups');
    }
};
