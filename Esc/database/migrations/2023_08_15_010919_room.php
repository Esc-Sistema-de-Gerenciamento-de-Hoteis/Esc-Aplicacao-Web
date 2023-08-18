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
        Schema::create('tb_room', function(Blueprint $table){
            $table->id();
            $table->string('room_number');
            $table->string('description');
            $table->string('price_per_day');
            $table->integer('brach_id')->references('id')->on('tb_company');
            $table->string('floor');
            $table->integer('status')->default(1);
            $table->string('status_reservation')->default('OPEN');
            $table->foreignIdFor(\App\Models\User::class, 'created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tb_room');
    }
};
