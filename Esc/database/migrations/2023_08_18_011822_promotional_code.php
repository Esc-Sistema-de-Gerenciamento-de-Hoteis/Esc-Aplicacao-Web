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
        Schema::create('tb_promotional_code', function(Blueprint $table){
            $table->id();
            $table->string('code');
            $table->string('description');
            $table->date('validity');
            $table->string('status');
            $table->integer('assigned_to_client_id')->references('id')->on('tb_client');
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
        Schema::dropIfExists('tb_promotional_code');

    }
};
