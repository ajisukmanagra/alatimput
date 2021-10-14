<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGajihTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gajih', function (Blueprint $table) {
            $table->id();
              $table->string('nama', 50);
             $table->string('foto');
             $table->enum('jenis_kelamin',['L','P']);
             $table->string('nik');
             $table->string('jabatan');
             $table->string('hari_kerja');
              $table->string('gajih_perhari');
             $table->string('tunjangan');
             $table->string('gajih_perbulan');
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
        Schema::dropIfExists('gajih');
    }
}
