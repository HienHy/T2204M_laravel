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
            $table->integer('qty')->default(0);
            $table->decimal('price',12,4)->default(0);

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
        Schema::dropIfExists('orders_products');
    }
}
