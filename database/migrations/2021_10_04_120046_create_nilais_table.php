<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->string('nis')->nullable();
            $table->string('nisn')->nullable();
            $table->string('nama')->nullable();
            $table->string('kelas')->nullable();
            $table->string('mapel')->nullable();
            $table->string('kkm')->nullable();
            $table->string('angka')->nullable();
            $table->string('predikat')->nullable();
            $table->string('keterangan')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('tahun_ajar_id')->unsigned();
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
        Schema::dropIfExists('nilais');
    }
}
