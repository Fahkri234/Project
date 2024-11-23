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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('sinopsis');
            $table->year('tahun_penerbitan');
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('penulis_id');
            $table->unsignedBigInteger('penerbit_id');
            $table->foreign('genre_id')->references('id')->on('genre')->onDelete('cascade');
            $table->foreign('penulis_id')->references('id')->on('penulis')->onDelete('cascade');
            $table->foreign('penerbit_id')->references('id')->on('penerbit')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buku');
    }
};
