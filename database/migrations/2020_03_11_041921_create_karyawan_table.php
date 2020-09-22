<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryawanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('karyawan', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('user_id');
        $table->integer('golongan_id')->nullable();
        $table->integer('jabatan_id')->nullable();
        $table->integer('cabang_id')->nullable();
        $table->string('nik')->nullable();
        $table->string('no_ktp');
        $table->string('nama_lengkap');
        $table->string('jk');
        $table->string('agama');
        $table->string('tempat_lahir');
        $table->date('tanggal_lahir');
        $table->string('status_nikah');
        $table->string('no_telepon')->nullable();
        $table->text('alamat');
        $table->text('visi');
        $table->text('misi');
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
      Schema::dropIfExists('karyawan');
    }
  }