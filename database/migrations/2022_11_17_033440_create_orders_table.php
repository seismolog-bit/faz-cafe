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
            $table->string('table_id');
            $table->string('card_id')->nullable();
            $table->integer('price');
            $table->decimal('tax', 16, 2)->default(0.11);
            $table->decimal('shipping', 16, 2)->default(0);
            $table->decimal('grand_total', 16, 0)->default(0);
            $table->string('order_status')->default('active');
            $table->timestamp('start_time');
            $table->timestamp('end_time')->useCurrent();
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
