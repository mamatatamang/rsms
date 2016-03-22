<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            //

            $table->increments('id');
            $table->string('product_name');
            $table->integer('typeid');
            $table->integer('brandid');
            $table->integer('supplierid');
            $table->float('supply_price');
            $table->float('price_exc_tax');
            $table->float('sales_tax');
            $table->float('price_inc_tax');
            $table->string('varient_attribute');
            $table->string('varient_default_value');
            $table->string('barcode');
            $table->integer('current_stock');

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
        Schema::table('products', function (Blueprint $table) {
            //
            $table->drop();
        });
    }
}
