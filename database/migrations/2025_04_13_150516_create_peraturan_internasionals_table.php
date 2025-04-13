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
        Schema::create('peraturan_internasional', function (Blueprint $table) {
            $table->id();
            $table->string('nomor');
            $table->string('nama_surat');
            $table->string('jenis');
            $table->date('tanggal_terbit');
            $table->date('tanggal_terundang');
            $table->string('deskripsi');
            $table->string('status');
            $table->string('file_pdf');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peraturan_internasional');
    }
};
