<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRelasiKeTableVenues extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('venues', function (Blueprint $table) {
            $table->integer('lokasi_id')->unsigned()->change();
            $table->foreign('lokasi_id')->references('id')->on('locations')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('venues', function (Blueprint $table) {
            $table->dropForeign(['lokasi_id']);
            // $table->dropIndex(['lokasi_id']);
        });
        Schema::table('venues', function(Blueprint $table){
            $table->integer('lokasi_id')->change();
        });
    }
}
