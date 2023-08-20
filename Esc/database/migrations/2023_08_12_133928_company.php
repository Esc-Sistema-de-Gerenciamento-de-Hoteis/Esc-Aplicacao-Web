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
        Schema::create('tb_company', function(Blueprint $table){
            $table->id();
            $table->string('branch');
            $table->string('abbreviation');
            $table->string('description')->nullable();
            $table->string('comfort')->nullable();
            $table->integer('rated')->nullable();
            $table->string('street');
            $table->string('neighborhood');
            $table->string('city');
            $table->string('state');
            $table->string('cep');
            $table->string('email')->nullable();
            $table->string('contact')->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tb_company');
    }
};
