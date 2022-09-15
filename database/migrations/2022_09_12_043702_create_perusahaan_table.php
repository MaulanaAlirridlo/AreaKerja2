<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerusahaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perusahaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_perusahaan', 20);
            $table->string('alamat', 30);
            $table->string('no_telp', 12);
            $table->string('deskripsi',30);
            $table->string('email');
            $table->unique('email');
            $table->string('website', 20);
            $table->string('nama_foto', 255);
            $table->string('type_foto', 5);
            $table->integer('ukuran_foto');
            $table->foreignId('area_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreignId('kategori_id')->constrained()
            ->onUpdate('cascade')
            ->onDelete('cascade');
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
        Schema::dropIfExists('perusahaan');
    }
}
