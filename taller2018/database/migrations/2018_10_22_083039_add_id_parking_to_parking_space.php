<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdParkingToParkingSpace extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('parking_space', function (Blueprint $table){
            $table->unsignedInteger('id_parking_fk');
            $table->foreign('id_parking_fk')->references('id_parking')->on('parking')->after('id_space');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('parking_space', function (Blueprint $table){
            $table->dropForeign(['id_parking_fk']);
            $table->dropColumn(['id_parking_fk']);
        });
    }
}
