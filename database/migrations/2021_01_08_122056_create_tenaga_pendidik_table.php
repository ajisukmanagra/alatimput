<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenagaPendidikTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenaga_pendidik', function (Blueprint $table) {
            $table->id();
             $table->string('nama', 50);
             $table->string('foto');
             $table->enum('jenis_kelamin',['L','P']);
             $table->string('tipe');
             $table->string('pegawai');
             $table->string('setatus');
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
        Schema::dropIfExists('tenaga_pendidik');
    }
}
