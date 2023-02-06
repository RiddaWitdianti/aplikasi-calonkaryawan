<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatariwayatpekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datariwayatpekerjaans', function (Blueprint $table) {
            $table->id();
            $table->string('namaperusahaan')->nullable();
            $table->string('posisiterakhir')->nullable();
            $table->double('pendapatanterakhir')->nullable();
            $table->string('tahun')->nullable();
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
        Schema::dropIfExists('datariwayatpekerjaans');
    }
}
