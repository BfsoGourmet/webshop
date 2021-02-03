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
            $table->string('title');
            $table->string('description');
            $table->float('price');

            $table->boolean('vegan');
            $table->boolean('vegetarian');
            $table->float('special_price');
            $table->date('specia_price_start');
            $table->date('specia_price_end');
            $table->string('article_number');
            $table->string('picture'); //asked about this
            $table->string('slug');
            $table->string('declaration');
            $table->integer('availability');
            $table->integer('manufacturer_id'); // foreign key
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
