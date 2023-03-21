<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableReservationVehicules extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_reservation_vehicules', function(bluePrint $table){
            $table -> String('reservationId');
            $table -> String('vehiculeId');
            $table -> primary('vehiculeId', 'reservationId');      
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
