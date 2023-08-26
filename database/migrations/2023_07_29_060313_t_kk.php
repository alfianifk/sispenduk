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
        Schema::create('t_kk', function(Blueprint $table) {
            $table->increments('id');
            $table->string('no_kk');
            $table->string('nik_kk');
            $table->string('nama_kk');
            $table->integer('jumlah_anggota_keluarga');
            $table->string('dusun_id');
            $table->string('rt');
            $table->string('rw');
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
