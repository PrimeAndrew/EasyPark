<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIdUsersRolesToReservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('reservation', function (Blueprint $table){
            $table->unsignedInteger('id_users_roles_fk');
            $table->foreign('id_users_roles_fk')->references('id_users_roles')->on('users_roles')->after('id_parking_space_fk');

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
            $table->dropForeign(['id_users_roles_fk']);
            $table->dropColumn(['id_users_roles_fk']);
        });
    }
}
