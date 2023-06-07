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
        Schema::create('kedudukan', function (Blueprint $table) {
            $table->uuid('id_kedudukan')->primary();
            $table->string('nama_perumahan');
            $table->double('RT');
            $table->double('RW');
            $table->string('kecamatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kedudukan');
    }
};