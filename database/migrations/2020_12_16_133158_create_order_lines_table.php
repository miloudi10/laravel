<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_lines', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('quantity_ordered');
            $table->foreignId('meal_id');
            $table->foreignId('order_id');
            $table->double('price_each',8,3);
            $table->timestamps();
            $table->foreign('meal_id')->references('id')->on('meals')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('restrict')->onUpdate('restrict');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_lines');
    }
}
