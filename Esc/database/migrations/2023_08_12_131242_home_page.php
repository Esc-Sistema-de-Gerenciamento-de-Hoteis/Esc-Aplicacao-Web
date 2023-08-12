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
        Schema::create('tb_home_page', function(Blueprint $table){
            $table->id();
            /* MAIN */
            $table->string('main_picture_1');
            $table->string('main_picture_2');
            $table->string('main_picture_3');

            /* MIDDLE */
            //Pictures
            $table->string('middle_picture_1');
            $table->string('middle_picture_2');
            $table->string('middle_picture_3');
            //Titles
            $table->string('middle_title_1');
            $table->string('middle_title_2');
            $table->string('middle_title_3');
            //Text
            $table->string('middle_text_1');
            $table->string('middle_text_2');
            $table->string('middle_text_3');

            /* LOWER */
            //Pictures
            $table->string('lower_picture_1');
            $table->string('lower_picture_2');
            $table->string('lower_picture_3');
            //Titles
            $table->string('lower_title_1');            
            $table->string('lower_title_2');  
            $table->string('lower_title_3');            
            //Text
            $table->string('lower_text_1');
            $table->string('lower_text_2');
            $table->string('lower_text_3');

            $table->integer('created_by')->references('id')->on('users');
            $table->timestamps();          
            
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('tb_home_page');

    }
};
