<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDailyMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daily_meals', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 25);
            $table->string('description', 80);
            $table->timestamp('date');
            $table->decimal('price', 5, 2);
            $table->string('price_unit');
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
        Schema::dropIfExists('daily_meals');
    }
}
