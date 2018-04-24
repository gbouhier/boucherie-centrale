<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories_service', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_parent')
                ->unsigned()
                ->nullable();
            $table->string('name', 25);
            $table->text('descriprion');
            $table->timestamps();
        });

        Schema::table('categories_service', function($table) {
            $table->foreign('id_parent')
                ->references('id')
                ->on('categories_service')
                ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories_service');
    }
}
