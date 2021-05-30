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
            $table->string('product_name');
            $table->string('product_desc');
            $table->string('image');
            $table->string('price');
            $table->string('old_price')->nullable();
            //$table->integer('category_id')->unsigned();
            // $table->foreignId('category_id')->constrained('categories')->unsigned();
            $table->timestamps();
            $table->foreignId('category_id')->constrained('categories', 'id');
            //$table->unsignedBigInteger('category_id');
       // });
        // Schema::table('products', function($table) {
           // $table->foreign('category_id')->references('id')->on('categories');
         });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
