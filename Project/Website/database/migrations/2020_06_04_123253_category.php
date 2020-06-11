<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Category extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id('Id_Product');
            $table->string('ProductName');
            $table->unsignedBigInteger('Id_Brand')->nullable()->unsigned();
            $table->unsignedBigInteger('Id_Category')->nullable()->unsigned();
            $table->float('Price')->nullable();
            $table->float('Discount')->nullable();
            $table->text('Content')->nullable();
            $table->string('Photo')->nullable();
            $table->timestamps();

            $table->foreign('Id_Brand')->references('Id_Brand')->on('brand')->onDelete('set null');
            $table->foreign('Id_Category')->references('Id_Category')->on('category')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
