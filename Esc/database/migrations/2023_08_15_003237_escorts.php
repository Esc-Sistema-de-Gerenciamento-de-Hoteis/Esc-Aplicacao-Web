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
            $table->string('cpf')->unique();
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
