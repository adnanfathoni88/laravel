<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa_matkul', function (Blueprint $table) {
            $table->unsignedBigInteger('mahasiswa_id');
            $table->foreign('mahasiswa_id')->references('id')->on('mahasiswa')->onDelete('restrict');
            $table->unsignedBigInteger('matkul_id');
            $table->foreign('matkul_id')->references('id')->on('matkuls')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mahasiswa_matkul');
    }
};
