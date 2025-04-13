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
        Schema::create('beritaacara', function (Blueprint $table) {
            $table->id();
            $table->string('nomor');
            $table->string('nama');
            $table->string('uraian');
            $table->date('tanggal');
            $table->string('konseptor');
            $table->string('catatan');
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
        Schema::dropIfExists('beritaacara');
    }
};
