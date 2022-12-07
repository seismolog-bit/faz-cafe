<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('invoice');
            $table->boolean('is_billiard')->default(1);
            $table->string('buyer');
            $table->string('payment_method')->nullable();
            $table->string('payment_status')->default('Belum Dibayar');
            $table->string('table_id');
            $table->string('card_id')->nullable();
            $table->integer('price');
            $table->decimal('tax', 16, 2)->default(0.11);
            $table->decimal('shipping', 16, 2)->default(0);
            $table->decimal('grand_total', 16, 0)->default(0);
            $table->string('order_status')->default('active');
            $table->datetime('start_time')->nullable();
            $table->datetime('end_time')->nullable();
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
        Schema::dropIfExists('orders');
    }
}
