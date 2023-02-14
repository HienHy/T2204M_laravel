<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableOrdersProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders_products', function (Blueprint $table) {
            $table->unsignedBigInteger('orders_id');
            $table->foreign('orders_id')->references('id')->on("orders");
            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')->references('id')->on("products");
            $table->unsignedInteger('qty');
            $table->unsignedDecimal('price',12,4);
            $table->unique(["orders_id","products_id"]);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders_products');
    }
}
