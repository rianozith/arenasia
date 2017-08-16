<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tanggal_booking');
            $table->date('tanggal_main');
            $table->integer('lama_mail');
            $table->integer('lapangan_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('jadwal_id')->unsigned();
            $table->integer('venue_id')->unsigned();
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
        Schema::dropIfExists('bookings');
    }
}
