<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembaiaranTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembaiaran', function (Blueprint $table) {
            $table->id();
              $table->string('nama', 50);
             $table->string('kelas');
             $table->enum('jenis_kelamin',['L','P']);
             $table->string('jumlah_baiaran');
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
        Schema::dropIfExists('pembaiaran');
    }
}
