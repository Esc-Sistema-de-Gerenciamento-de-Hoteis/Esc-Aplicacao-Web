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
        Schema::create('tb_assigned_permission', function(Blueprint $table){
            $table->id();
            $table->integer('profile_id')->references('id')->on('tb_profile');
            $table->string('permission_id')->references('id')->on('tb_permission');
            $table->integer('assigned_by')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tb_assigned_permission');
    }
};
