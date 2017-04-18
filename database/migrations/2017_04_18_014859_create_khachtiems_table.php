<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKhachtiemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khachtiems', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->tinyInteger('gioitinh');
            $table->text('diachi');
            $table->date('ngaysinh');
            $table->string('username');
            $table->string('password');
            $table->string('path');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khachtiems');
    }
}
