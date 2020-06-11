<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotesToOrderitemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderitem', function (Blueprint $table) {
            $table->id('Id_OrderItem');
            $table->unsignedBigInteger('Id_Order')->nullable()->unsigned();
            $table->unsignedBigInteger('Id_Product')->nullable()->unsigned();
            $table->float('Price')->nullable();
            $table->float('Discount')->nullable();
            $table->timestamps();

            $table->foreign('Id_Order')->references('Id_Order')->on('order')->onDelete('set null');
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
        Schema::table('orderitem', function (Blueprint $table) {
            //
        });
    }
}
