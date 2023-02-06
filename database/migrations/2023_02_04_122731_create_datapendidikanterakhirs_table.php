<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatapendidikanterakhirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datapendidikanterakhirs', function (Blueprint $table) {
            $table->id();
            $table->string('namainstitusi')->required();
            $table->string('jurusan')->required();
            $table->string('tahunlulus')->required();
            $table->string('ipk')->required();
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
        Schema::dropIfExists('datapendidikanterakhirs');
    }
}
