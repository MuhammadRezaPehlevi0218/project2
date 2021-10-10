<?php

use Illuminate\Database\Schema\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWilayahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wilayahs', function (Blueprint $table) {
            // $table->id('ID_Wilayah');
            $table->string('ID_Wilayah')->primary();
            $table->string('Nama_Wilayah');
            $table->string('Kecamatan');
            $table->string('Kelurahan');
            $table->string('Alasan');
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
        Schema::dropIfExists('wilayahs');
    }
}
