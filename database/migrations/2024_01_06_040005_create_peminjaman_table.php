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
        Schema::create('peminjaman', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('buku_id');
            $table->foreign('buku_id')->references('id')->on('buku');

            $table->string('nama_peminjam');
            $table->string('nama_buku');
            $table->date('tgl_pinjam');
            $table->date('tgl_pengembalian');
            $table->string('rating');
            $table->string('ulasan');
            $table->string('status_peminjam');

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
        Schema::dropIfExists('peminjaman');

    }
};
