<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengumuman', function (Blueprint $table) {
            $table->uuid('id_pengumuman')->primary();
            $table->string('judul_pengumuman');
            $table->enum('kategori', ['Acara', 'Berita', 'Waspada']);
            $table->enum('stats', ['Formal', 'Penting', 'Sangat Penting']);
            $table->string('deskripsi');
            $table->string('isi');
            $table->string('lokasi');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('pengumuman');
    }
};