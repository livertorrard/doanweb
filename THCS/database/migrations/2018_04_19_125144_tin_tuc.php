<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TinTuc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('tintuc',function($table){
            $table->increments('id');
            $table->string('tieude');
            $table->string('tieudekhongdau');
            $table->text('tomtat');
            $table->longText('noidung');
            $table->string('hinh');
            $table->integer('noibat')->default(0);
            $table->integer('soluotxem')->default(0);
            $table->integer('id_loaitin')->unsigned();
            $table->integer('id_tv')->unsigned();
            $table->foreign('id_loaitin')->references('id')->on('loaitin');
            $table->foreign('id_tv')->references('id')->on('users');
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
        //
        Schema::drop('tintuc');
    }
}
