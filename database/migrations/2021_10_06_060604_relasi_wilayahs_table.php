<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RelasiWilayahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('wilayahs', function (Blueprint $table) {
            $table->string('NIK')->nullable();
            $table->foreign('NIK')->references('NIK')->on('penduduks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('wilayahs', function (Blueprint $table) {
            $table->string('penduduks');
            $table->dropForeign(['NIK']);
        });
    }
}
