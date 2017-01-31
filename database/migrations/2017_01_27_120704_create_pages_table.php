<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('pages', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('overview');
            $table->text('bodytext');
            $table->text('image');
            $table->string('diligence');
            $table->string('bodycontent');
            $table->string('guide');
            $table->text('terms');
            $table->text('privacy');
            $table->text('acceptable');  
            $table->timestamps();
        });
    
   }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pages');
    }
}
