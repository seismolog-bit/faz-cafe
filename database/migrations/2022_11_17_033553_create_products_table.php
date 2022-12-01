<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->integer('category_id');
            $table->string('name', 60);
            $table->string('image', 60)->default('assets/img/team/avatar.png');
            $table->string('detail');
            $table->decimal('price', 16, 0)->default(0);
            $table->decimal('discount', 16, 0)->default(0);
            $table->decimal('duration', 5, 0)->nullable();
            $table->boolean('archive')->default(0);
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
        Schema::dropIfExists('products');
    }
}
