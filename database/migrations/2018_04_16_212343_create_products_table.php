<?php

use Illuminate\Support\Facades\Schema;
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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_category')
                ->unsigned()
                ->nullable();
            $table->string('name', 50);
            $table->text('description');
            $table->decimal('price', 3, 2);
            $table->string('price_unit', 20);
            $table->boolean('available');
            $table->timestamps();
        });

        Schema::table('products', function(Blueprint $table) {
            $table->foreign('id_category')
                ->references('id')
                ->on('categories_product')
                ->onDelete('SET NULL')
                ->nullable();
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
