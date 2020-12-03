<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('url');
            $table->string('title');
             $table->integer('price');
             $table->text('description');
             $table->bigInteger('brand_id')->unsigned()->index();
             $table->bigInteger('category_id')->unsigned()->index();
             $table->timestamps();
             $table->string('created_at_ip',45)->nullable();
             $table->string('updated_at_ip',45)->nullable();

             $table->foreign('brand_id')->references('id')->on('brands');
             $table->foreign('category_id')->references('id')->on('categories');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
