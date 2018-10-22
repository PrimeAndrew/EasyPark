<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdScheduleToReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservation', function (Blueprint $table){
            $table->unsignedInteger('id_schedule_fk');
            $table->foreign('id_schedule_fk')->references('id_schedule')->on('schedule')->after('id_car_fk');

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
            $table->dropForeign(['id_schedule_fk']);
            $table->dropColumn(['id_schedule_fk']);
        });
    }
}
