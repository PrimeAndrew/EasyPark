<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdZoneToParking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parking', function (Blueprint $table){
            $table->unsignedInteger('id_zone_fk');
            $table->foreign('id_zone_fk')->references('id_zone')->on('zone')->after('id_parking');

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
            $table->dropForeign(['id_zone_fk']);
            $table->dropColumn(['id_zone_fk']);
        });
    }
}
