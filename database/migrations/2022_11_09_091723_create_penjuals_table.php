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
        Schema::create('penjuals', function (Blueprint $table) {
            $table->id('id_penjual');
            $table->string('nama_penjual', 30);
            $table->string('brand_penjual', 100);
            $table->string('nomor_penjual', 20)->nullable();
            $table->string('email_penjual', 50)->nullable();
            $table->string('sandi', 50);
            $table->string('foto', 100);
            $table->string('alamat', 100);
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
        Schema::dropIfExists('penjuals');
    }
};
