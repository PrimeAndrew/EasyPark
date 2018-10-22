<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdCarToReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservation', function (Blueprint $table){
            $table->unsignedInteger('id_car_fk');
            $table->foreign('id_car_fk')->references('id_car')->on('car')->after('id_users_roles_fk');

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
            $table->dropForeign(['id_car_fk']);
            $table->dropColumn(['id_car_fk']);
        });
    }
}
