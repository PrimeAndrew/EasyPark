<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdParkingSpaceToReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservation', function (Blueprint $table){
            $table->unsignedInteger('id_parking_space_fk');
            $table->foreign('id_parking_space_fk')->references('id_parking_space')->on('parking_space')->after('id_reservation');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('reservation', function (Blueprint $table){
            $table->dropForeign(['id_parking_space_fk']);
            $table->dropColumn(['id_parking_space_fk']);
        });
    }
}
