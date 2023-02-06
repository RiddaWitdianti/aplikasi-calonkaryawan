<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiodatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->required();
            $table->string('posisi')->required();
            $table->string('noktp', 16)->required();
            $table->string('tempatlahir')->required();
            $table->date('tgllahir');
            $table->enum('jeniskelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('agama');
            $table->enum('goldarah', ['A', 'B', 'AB', 'O']);
            $table->enum('status', ['Belum Kawin', 'Kawin', 'Cerai Hidup', 'Cerai Mati']);
            $table->string('alamatktp')->required();
            $table->string('alamattinggal')->required();
            $table->string('email')->required();
            $table->string('notelp', 12)->required();
            $table->string('notelpbisadihubungi', 12)->required();
            $table->text('skill')->required();
            $table->enum('Ketersediaan', ['Ya', 'Tidak']);
            $table->double('penghasilandiharapkan')->required();
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
        Schema::dropIfExists('biodatas');
    }
}
