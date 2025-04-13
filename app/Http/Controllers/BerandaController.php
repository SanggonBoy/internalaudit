<?php

namespace App\Http\Controllers;

use App\Models\beranda;
use App\Http\Requests\StoreberandaRequest;
use App\Http\Requests\UpdateberandaRequest;
use App\Models\beritaacara;
use App\Models\laporanhasilaudit;
use App\Models\peraturan_daerah;
use App\Models\peraturan_menteri;
use App\Models\peraturan_presiden;
use App\Models\peraturan_perusahaan;
use App\Models\peraturan_direksi;
use App\Models\peraturan_internasional;


class berandaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function beranda()
    {
        return view('beranda');
    }

    public function open()
    {
        return view('open');
    }
    public function landingpage()
    {
        return view('landingpage');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function search()
    {
        $peraturan_perusahaan = peraturan_perusahaan::all();
        return view('search', [
            'peraturan_perusahaan' => $peraturan_perusahaan,
        ]);
    }

    public function searchdireksi()
    {
        $peraturan_direksi = peraturan_direksi::all();
        return view('searchdireksi', [
            'peraturan_direksi' => $peraturan_direksi,
        ]);
    }

    public function searchdaerah()
    {
        $peraturan_daerah = peraturan_daerah::all();
        return view('searchdaerah', [
            'peraturan_daerah' => $peraturan_daerah,
        ]);
    }

    public function searchmenteri()
    {
        $peraturan_menteri = peraturan_menteri::all();
        return view('searchmenteri', [
            'peraturan_menteri' => $peraturan_menteri,
        ]);
    }

    public function searchpresiden()
    {
        $peraturan_presiden = peraturan_presiden::all();
        return view('searchpresiden', [
            'peraturan_presiden' => $peraturan_presiden,
        ]);
    }

    public function searchinternasional()
    {
        $peraturan_internasional = peraturan_internasional::all();
        return view('searchinternasional', [
            'peraturan_internasional' => $peraturan_internasional,
        ]);
    }

    public function kertaskerja()
    {
        return view('kertaskerja');
    }
    public function suratmasuk()
    {
        return view('suratmasuk');
    }

    public function suratkeluar()
    {
        return view('suratkeluar');
    }

    public function suratketerangandireksi()
    {
        return view('suratketerangandireksi');
    }

    public function surattugas()
    {
        return view('surattugas');
    }

    public function laporanhasilaudit()
    {
        $laporanhasilaudit = laporanhasilaudit::all();
        return view('laporanhasilaudit', [
            'laporanhasilaudit' => $laporanhasilaudit,
        ]);
    }

    public function beritaacara()
    {
        $beritaacara = beritaacara::all();
        return view('beritaacara', [
            'beritaacara' => $beritaacara,
        ]);
    }

    public function mom()
    {
        return view('mom');
    }
    
    public function monitoring()
    {
        return view('monitoring');
    }

    public function monitoring2()
    {
        return view('monitoring2');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreberandaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(beranda $beranda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(beranda $beranda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateberandaRequest $request, beranda $beranda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(beranda $beranda)
    {
        //
    }
}
