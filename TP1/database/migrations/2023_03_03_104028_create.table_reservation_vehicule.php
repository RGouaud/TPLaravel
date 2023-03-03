<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatetableReservationVehicule extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_reservation_vehicule', function(bluePrint $table){
            $table -> String('reservationId');
            $table-> onDelete('cascade');
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
