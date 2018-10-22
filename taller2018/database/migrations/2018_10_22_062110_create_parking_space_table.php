<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParkingSpaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parking_space', function (Blueprint $table) {
            $table->increments('id_space');
            //$table->unsignedInteger('id_parking_fk');
            $table->unsignedInteger('space_code');
            $table->string('space_status',45);
            $table->timestamp('space_mod_date');
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
        Schema::dropIfExists('parking_space');
    }
}
