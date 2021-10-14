<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ada', function (Blueprint $table) {
            $table->id();

            $table->string('Nama', 50);
            $table->string('Kontak');
            $table->string('Asal_tempat');
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('Keterangan');
            $table->string('tujuan');
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
        Schema::dropIfExists('ada');
    }
}
