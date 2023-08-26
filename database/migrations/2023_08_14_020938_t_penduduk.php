<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('t_penduduk', function(Blueprint $table) {
            $table->increments('id');
            $table->string('kk_id');
            $table->string('nik');
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('agama');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->string('goldar');
            $table->string('status_perkawinan');
            $table->date('tanggal_perkawinan');
            $table->string('status_hubungan');
            $table->string('kewarganegaraan');
            $table->string('no_paspor   ');
            $table->string('no_kitap');
            $table->string('nama_orang_tua');
            $table->timestamps();

        });   
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
