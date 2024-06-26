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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->foreignId('role_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_status_id')->default(1)->constrained('user_statuses')->onDelete('cascade');
            $table->enum('gender', ['male', 'female']); // Define 'gender' column as enum
            $table->date('dob')->nullable();
            $table->binary('pic')->nullable(); // Changed 'pic' to 'binary' as indicated in the model
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
        Schema::dropIfExists('users');
    }
};
