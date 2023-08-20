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
        Schema::create('tb_gallery', function(Blueprint $table){
            $table->id();
            $table->integer('branch_id')->references('id')->on('tb_company');
            $table->integer('room_id')->references('id')->on('tb_room')->nullable();
            $table->string('name');
            $table->string('link');
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
        Schema::dropIfExists('tb_gallery');

    }
};
