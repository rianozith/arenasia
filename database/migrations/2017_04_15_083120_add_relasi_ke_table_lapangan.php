<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelasiKeTableLapangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('lapangans', function (Blueprint $table) {
            $table->integer('venue_id')->unsigned()->change();
            $table->foreign('venue_id')->references('id')->on('venues')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('lapangans', function (Blueprint $table) {
            $table->dropForeign(['venue_id']);
            // $table->dropIndex(['venue_id']);
        });
        Schema::table('lapangans', function(Blueprint $table){
            $table->integer('venue_id')->change();
        });
    }
}
