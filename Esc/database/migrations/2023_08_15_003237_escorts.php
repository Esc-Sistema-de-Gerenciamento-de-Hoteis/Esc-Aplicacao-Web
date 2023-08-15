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
        //
        Schema::create('tb_escorts', function(Blueprint $table){
            $table->id();
            $table->integer('escort_id')->references('id')->on('tb_client');
            $table->string('name');
            $table->string('last_name');
            $table->string('cpf');
            $table->string('birthday')->nullable();
            $table->string('sex')->nullable();
            $table->string('email')->unique();
            $table->string('contact')->nullable();
            $table->string('emergency_contact')->nullable();
            $table->string('cep');
            $table->string('address');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->integer('registered_by')->references('id')->on('users');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tb_escorts');
    }
};
