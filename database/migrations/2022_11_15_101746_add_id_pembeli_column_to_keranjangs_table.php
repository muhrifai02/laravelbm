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
        Schema::table('keranjangs', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pembeli')->after('id_keranjang')->required();
            $table->foreign('id_pembeli')->references('id_pembeli')->on('pembelis');

            $table->unsignedBigInteger('id_produk')->after('id_pembeli')->required();
            $table->foreign('id_produk')->references('id_produk')->on('produks');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('keranjangs', function (Blueprint $table) {
            $table->dropForeign(['id_pembeli']);
            $table->dropColumn('id_pembeli');
            $table->dropForeign(['id_produk']);
            $table->dropColumn('id_produk');
        });
    }
};
