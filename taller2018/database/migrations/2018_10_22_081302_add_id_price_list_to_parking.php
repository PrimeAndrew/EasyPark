<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdPriceListToParking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parking', function (Blueprint $table){
            $table->unsignedInteger('id_price_list_fk');
            $table->foreign('id_price_list_fk')->references('id_price_list')->on('price_list')->after('id_zone_fk');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parking', function (Blueprint $table){
            $table->dropForeign(['id_price_list_fk']);
            $table->dropColumn(['id_price_list_fk']);
        });
    }
}
