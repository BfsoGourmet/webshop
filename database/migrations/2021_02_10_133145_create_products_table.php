<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('uid')->unique()->nullable();
            $table->string('product');
            $table->string('description');
            $table->double('price');
            $table->boolean('vegan');
            $table->boolean('vegetarian');
            $table->string('article_number');
            $table->string('picture');
            $table->string('slug');
            $table->string('declaration');
            $table->foreignId('manufacturer_id')->constrained();
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
        Schema::dropIfExists('products');
    }
}
