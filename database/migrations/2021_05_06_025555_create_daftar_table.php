<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDaftarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar', function (Blueprint $table) {
            $table->id();
            
             $table->string('nis', 50);
            $table->string('nisn');
            $table->string('nama');
             $table->enum('jenis_kelamin',['L','P']);
            $table->string('tempat');
             $table->string('tahun');
            $table->string('orangtua');
            $table->string('no_ijajah');
             $table->string('no_skhun');
             $table->string('no_peserta');
            $table->string('kelas');
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
        Schema::dropIfExists('daftar');
    }
}
