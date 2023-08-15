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
            $table->integer('escort_id')->references('id')->on('tb_client');
            $table->string('price_per_day');
            $table->string('room_number');
            $table->string('floor');
            $table->string('status')->default(1);
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
    }
};
