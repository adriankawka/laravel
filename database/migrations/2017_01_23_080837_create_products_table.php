<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('products', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('title');
            $table->string('location');
            $table->string('type');
            $table->string('price');
            $table->string('description');
            $table->string('completiondate');
            $table->string('strategy');
            $table->string('yield');
            $table->string('launchdate');
            $table->string('country');
            $table->text('brochureupload');
            $table->text('mailimage');
            $table->text('images');  
            $table->string('contactname');
            $table->string('contactnumber');
            $table->string('contactemail');
            $table->string('companyname');
            $table->string('websiteadress');
            $table->boolean('featured')->default(0);
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
        Schema::drop('products');
    }
}
