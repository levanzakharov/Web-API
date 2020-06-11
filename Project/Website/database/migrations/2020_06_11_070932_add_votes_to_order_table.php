<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddVotesToOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id('Id_Order');
            $table->unsignedBigInteger('Id_User')->unsigned();
            $table->unsignedBigInteger('Id_OrderStatus')->nullable()->unsigned();
            $table->float('Total_Price');
            $table->timestamps();

            $table->foreign('Id_User')->references('id')->on('users');
            $table->foreign('Id_OrderStatus')->references('Id_OrderStatus')->on('orderstatus')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('order', function (Blueprint $table) {
            //
        });
    }
}
