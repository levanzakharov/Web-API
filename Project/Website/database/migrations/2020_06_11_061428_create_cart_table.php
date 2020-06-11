<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart', function (Blueprint $table) {
            $table->id('Id_Cart');
            $table->unsignedBigInteger('Id_User')->nullable()->unsigned();
            $table->unsignedBigInteger('Id_Product')->nullable()->unsigned();
            $table->integer('Quantity');
            $table->timestamps();

            $table->foreign('Id_User')->references('id')->on('users')->onDelete('set null');
            $table->foreign('Id_Product')->references('Id_Product')->on('product')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart');
    }
}
