<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_product', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_parent')
                ->unsigned()    
                ->nullable();
            $table->string('name', 25);
            $table->text('descriprion');
            $table->timestamps();
        });

        Schema::table('categories_product', function($table) {
            $table->foreign('id_parent')
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
        Schema::dropIfExists('categories_product');
    }
}
