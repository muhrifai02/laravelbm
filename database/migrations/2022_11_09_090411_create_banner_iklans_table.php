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
        Schema::create('banner_iklans', function (Blueprint $table) {
            $table->id('id_gambar');
            $table->string('nama_gambar', 25);
            $table->string('gambar', 100);
            $table->enum('status_gambar', ['banner', 'iklan']);
            $table->string('link', 100);
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
        Schema::dropIfExists('banner_iklans');
    }
};
