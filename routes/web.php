<?php

use App\Http\Controllers\PeraturanDaerahController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\berandaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('beranda', [berandaController::class, 'beranda'])->name('beranda');
    Route::get('open', [berandaController::class, 'open'])->name('open');
    Route::get('landingpage', [berandaController::class, 'landingpage'])->name('landingpage');
    Route::get('peraturan', [berandaController::class, 'peraturan'])->name('peraturan');
    Route::get('search', [berandaController::class, 'search'])->name('search');
    Route::get('searchdireksi', [berandaController::class, 'searchdireksi'])->name('searchdireksi');
    Route::get('searchdaerah', [berandaController::class, 'searchdaerah'])->name('searchdaerah');
    Route::get('searchmenteri', [berandaController::class, 'searchmenteri'])->name('searchmenteri');
    Route::get('searchpresiden', [berandaController::class, 'searchpresiden'])->name('searchpresiden');
    Route::get('searchinternasional', [berandaController::class, 'searchinternasional'])->name('searchinternasional');
    Route::get('kertaskerja', [berandaController::class, 'kertaskerja'])->name('kertaskerja');
    Route::get('beritaacara', [berandaController::class, 'beritaacara'])->name('beritaacara');
    Route::get('mom', [berandaController::class, 'mom'])->name('mom');
    Route::get('detailkertaskerja', [berandaController::class, 'detailkertaskerja'])->name('detailkertaskerja');
    Route::get('detailkertaskerja1', [berandaController::class, 'detailkertaskerja1'])->name('detailkertaskerja1');
    Route::get('detailkertaskerja2', [berandaController::class, 'detailkertaskerja2'])->name('detailkertaskerja2');
    Route::get('suratmasuk', [berandaController::class, 'suratmasuk'])->name('suratmasuk');
    Route::get('suratkeluar', [berandaController::class, 'suratkeluar'])->name('suratkeluar');
    Route::get('suratketerangandireksi', [berandaController::class, 'suratketerangandireksi'])->name('suratketerangandireksi');
    Route::get('surattugas', [berandaController::class, 'surattugas'])->name('surattugas');
    Route::get('laporanhasilaudit', [berandaController::class, 'laporanhasilaudit'])->name('laporanhasilaudit');
    Route::get('monitoring', [berandaController::class, 'monitoring'])->name('monitoring');
    Route::get('monitoring2', [berandaController::class, 'monitoring2'])->name('monitoring2');
    Route::post('/peraturan_daerah', [PeraturanDaerahController::class, 'store'])->name('peraturan_daerah.store');
});

require __DIR__ . '/auth.php';
