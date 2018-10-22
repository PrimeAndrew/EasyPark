<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservation', function (Blueprint $table) {
            $table->increments('id_reservation');
            //$table->unsignedInteger('id_parking_space_fk');
            //$table->unsignedInteger('id_users_roles_fk');
            //$table->unsignedInteger('id_car_fk');
            //$table->unsignedInteger('id_schedule_fk');
            $table->timestamp('reservation_entry_date');
            $table->timestamp('reservation_departure_date');
            $table->decimal('amount',10,7);
            $table->string('confirmation_code',45);
            $table->string('reservation_state',45);
            $table->timestamp('real_entry_date');
            $table->timestamp('real_departure_date');
            $table->string('reservation_type',45);
            $table->unsignedInteger('client_score');
            $table->unsignedInteger('parking_score');
            $table->timestamp('date_mode_state');
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
        Schema::dropIfExists('reservation');
    }
}
