<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masuks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('xs', 3);
            $table->string('x', 3);
            $table->string('m', 3);
            $table->string('l', 3);
            $table->string('xl', 3);
            $table->string('xxl', 3);
            $table->string('jumlah', 4);
            $table->string('namapenjahit', 11);
            $table->date('tglmasuk');
            $table->integer('barang_id')->nullable();
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
        Schema::dropIfExists('masuks');
    }
}
