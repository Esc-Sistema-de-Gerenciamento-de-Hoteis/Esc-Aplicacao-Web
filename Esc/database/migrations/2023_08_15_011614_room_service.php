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
        Schema::create('tb_room_service', function(Blueprint $table){
            $table->id();
            $table->integer('product_id')->references('id')->on('tb_room_service_products')
            $table->integer('room_id')->references('id')->on('tb_room')
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
        Schema::dropIfExists('tb_room_service');
    }
};
