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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->uuid('id_pengaduan')->primary();
            $table->string('judul_pengaduan');
            $table->enum('kategori', ['kriminal', 'penipuan', 'kecelakaan', 'random']);
            $table->enum('stats', ['Pending', 'Accept']);
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
        Schema::dropIfExists('pengaduan');
    }
};