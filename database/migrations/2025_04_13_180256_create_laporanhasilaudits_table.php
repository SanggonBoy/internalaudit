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
        Schema::create('laporanhasilaudit', function (Blueprint $table) {
            $table->id();
            $table->string('nomor');
            $table->string('nama_lha');
            $table->string('uraian_lha');
            $table->date('tanggal');
            $table->string('Notulis');
            $table->string('Catatan');
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
        Schema::dropIfExists('laporanhasilaudit');
    }
};
