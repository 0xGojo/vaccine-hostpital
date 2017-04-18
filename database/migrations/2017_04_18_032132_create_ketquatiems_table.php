<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKetquatiemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ketquatiems', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('bacsi');
            $table->string('yta');
            $table->text('diadiem');
            $table->boolean('trangthai');
            $table->string('ghichu');
            $table->integer('khachtiem_id');
            $table->integer('lichtiemphong_id');
            $table->integer('vaccine_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ketquatiems');
    }
}
