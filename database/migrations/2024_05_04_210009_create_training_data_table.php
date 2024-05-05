<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_data', function (Blueprint $table) {
            $table->id();
            $table->foreignId('trainingsession_id')->constrained('training_sessions')->onDelete('cascade');
            $table->foreignId('coach_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('swimmer_id')->constrained('users')->onDelete('cascade');
            $table->decimal('distance', 10, 2);
            $table->time('duration');
            $table->integer('sets');
            $table->integer('reps');
            $table->foreignId('stroke_id')->constrained('strokes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_data');
    }
};
