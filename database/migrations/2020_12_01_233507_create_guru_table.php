<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGuruTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->id();

             $table->string('nama', 50);
            $table->string('nip');
             $table->enum('pangkat',['TMP','PNS']);
             $table->enum('jabatan',['GURU','PEGAWAI']);
            $table->string('masakerja');
             $table->string('pendidikan');
            $table->string('tgl');
            $table->string('mulai_kerja');
             $table->string('mutasi');
             $table->string('disini_sejak');
            $table->string('email');
            $table->string('nuptk');
             $table->string('nrg');
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
        Schema::dropIfExists('guru');
    }
}
