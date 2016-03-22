<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddSuppliersMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('add_suppliers', function (Blueprint $table) {
            //
            $table->increments('id');
            $table->string('supplier_name');
            $table->string('supplier_description');
            $table->string('company');
            $table->string('website');
            $table->string('supplier_email');
            $table->string('supplier_contact_fname');

            $table->string('supplier_contact_lname');
            $table->string('supplier_phone');

            $table->string('supplier_mobile');
            $table->string('supplier_country');

            $table->string('city');
            $table->string('state');
            $table->string('postalcode');
            $table->string('street');

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
        Schema::table('add_suppliers', function (Blueprint $table) {
            //
            $table->drop();

        });
    }
}
