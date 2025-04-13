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
        Schema::create('sub_kertas_kerja', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kertas_kerja');
            $table->foreign('kertas_kerja')->references('id')->on('kertas_kerja')->onDelete('cascade');
            $table->string('nomor');
            $table->string('tahun');
            $table->string('deskripsi');
            $table->string('kategori');
            $table->string('file_pdf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_kertas_kerja');
    }
};
