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
        Schema::table('detail_produk', function (Blueprint $table) {
            $table->unsignedBigInteger('id_produk')->after('id_detailProduk')->required();
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
        Schema::table('detail_produk', function (Blueprint $table) {
            $table->dropForeign(['id_produk']);
            $table->dropColumn('id_produk');
        });
    }
};
