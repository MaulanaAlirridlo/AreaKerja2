<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKandidatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kandidats', function (Blueprint $table) {
            $table->id();
            $table->text('alamat');
            $table->enum('jenis_kelamin', ['l', 'p']);
            $table->text('keahlian');
            $table->string('pendidikan', 50);
            $table->string('nama_foto', 255);
            $table->string('type_foto', 5);
            $table->integer('ukuran_foto');
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
        Schema::dropIfExists('kandidats');
    }
}
