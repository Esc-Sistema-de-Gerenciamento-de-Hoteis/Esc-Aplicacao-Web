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
        Schema::create('tb_reservation', function(Blueprint $table){
            $table->id();
            $table->date('date');
            $table->integer('client_id');
            $table->string('status')->default('PENDING');
            $table->integer('romm_id')->references('id')->on('tb_room');
            $table->integer('company_id')->references('id')->on('tb_company');
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
