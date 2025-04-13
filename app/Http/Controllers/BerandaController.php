<?php

namespace App\Http\Controllers;

use App\Models\beranda;
use App\Http\Requests\StoreberandaRequest;
use App\Http\Requests\UpdateberandaRequest;
use App\Models\kertas_kerja;
use App\Models\peraturan_daerah;
use App\Models\sub_kertas_kerja;

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
        return view('search');
    }

    public function searchdireksi()
    {
        return view('searchdireksi');
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
        return view('searchmenteri');
    }

    public function searchpresiden()
    {
        return view('searchpresiden');
    }

    public function searchinternasional()
    {
        return view('searchinternasional');
    }

    public function kertaskerja()
    {
        $kertas_kerja = kertas_kerja::all();
        return view('kertaskerja', [
            'kertas_kerja' => $kertas_kerja,
        ]);
    }

    public function detailkertaskerja($id)
    {
        $sub_kertas_kerja = sub_kertas_kerja::where('kertas_kerja', $id)->get();
        $kertas_kerja  = kertas_kerja::find($id);
        return view('detailkertaskerja', [
            'sub_kertas_kerja' => $sub_kertas_kerja,
            'kertas_kerja' => $kertas_kerja,
        ]);
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
        return view('laporanhasilaudit');
    }

    public function beritaacara()
    {
        return view('beritaacara');
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
