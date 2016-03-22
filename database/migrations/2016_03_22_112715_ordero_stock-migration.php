<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class OrderoStockMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orderStock', function (Blueprint $table) {
            //

            $table->increments('id');
            $table->string('order_name');
            $table->integer('supplierid');
            $table->integer('productid');
            $table->integer('quantity');

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
        Schema::table('orderStock', function (Blueprint $table) {
            //
            $table->drop();
        });
    }
}
