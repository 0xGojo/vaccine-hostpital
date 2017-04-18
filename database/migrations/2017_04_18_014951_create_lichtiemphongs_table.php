<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLichtiemphongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lichtiemphongs', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('mui');
            $table->text('ghichu');
            $table->integer('vaccine_id');
            $table->integer('doituong_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lichtiemphongs');
    }
}
