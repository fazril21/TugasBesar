<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barangs', function (Blueprint $table) {
            $table->bigIncrements('id')->nullable()->unsigned();
            $table->string('namabaju', 15);
            $table->string('jenisbaju', 6);
            $table->string('xs', 3);
            $table->string('x', 3);
            $table->string('m', 3);
            $table->string('l', 3);
            $table->string('xl', 3);
            $table->string('xxl', 3);
            $table->string('jumlah', 4);
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
        Schema::dropIfExists('barangs');
    }
}
