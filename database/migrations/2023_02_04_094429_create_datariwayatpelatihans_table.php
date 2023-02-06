<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatariwayatpelatihansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datariwayatpelatihans', function (Blueprint $table) {
            $table->id();
            $table->string('namakursus')->nullable();
            $table->enum('sertififkat', ['Ada', 'Tidak']);
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
        Schema::dropIfExists('datariwayatpelatihans');
    }
}
