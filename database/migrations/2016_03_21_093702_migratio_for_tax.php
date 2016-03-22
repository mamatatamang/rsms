<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class MigratioForTax extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::Create('tax', function (Blueprint $table) {
            //

            $table->increments('id');
            $table->string('tax_country');
            $table->float('tax_rate');

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
        Schema::table('tax', function (Blueprint $table) {
            //
            $this->drop();
        });
    }
}
