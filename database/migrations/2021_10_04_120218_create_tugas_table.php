<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTugasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->string('mapel')->nullable();
            $table->string('judul')->nullable();
            $table->text('deskripsi')->nullable();
            $table->bigInteger('guru_id')->unsigned();
            $table->bigInteger('kelas_id')->unsigned();
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
        Schema::dropIfExists('tugas');
    }
}
