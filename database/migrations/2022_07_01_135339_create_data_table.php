<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('status_keluarga');
            $table->char('jekel');
            $table->string('status_kawin');
            $table->char('goldar');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('ket')->nullable();
            $table->integer('umur');
            $table->unsignedbigInteger('id_kk');
            $table->foreign('id_kk')->references('id')->on('kk')->onDelete('CASCADE');
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
        Schema::dropIfExists('data');
    }
}
