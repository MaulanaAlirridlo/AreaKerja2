<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLamaransTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lamarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('perusahaan_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->string('jenis_lowongan',255);
            $table->string('status_kerja',50);
            $table->string('pendidikan',50);
            $table->enum('jenis_kelamin',['l','p']);
            $table->integer('umur');
            $table->string('besar_gaji',10);
            $table->date('batas_lamaran');
            $table->string('lokasi_kerja',255);
            $table->text('Deskripsi_pekerjaan');
            $table->text('syarat');
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
        Schema::dropIfExists('lamarans');
    }
}
