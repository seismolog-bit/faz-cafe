<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->decimal('price', 16, 2);
            $table->integer('qty');
            $table->decimal('total', 16, 2);
            $table->decimal('discount', 16, 2)->default(0);
            $table->decimal('grand_total', 16, 2);
            $table->decimal('duration', 16, 0)->default(0);
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
        Schema::dropIfExists('order_items');
    }
}
