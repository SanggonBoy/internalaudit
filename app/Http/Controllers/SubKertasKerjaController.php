<?php

namespace App\Http\Controllers;

use App\Models\sub_kertas_kerja;
use App\Http\Requests\Storesub_kertas_kerjaRequest;
use App\Http\Requests\Updatesub_kertas_kerjaRequest;
use Illuminate\Http\Request;

class SubKertasKerjaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'kertas_kerja' => 'required|exists:kertas_kerja,id',
            'tahun' => 'required',
            'deskripsi' => 'required',
            'nomor' => 'required',
            'kategori' => 'required',
            'file_pdf' => 'required|file|mimes:pdf|max:2048',
        ]);

        if ($request->hasFile('file_pdf') && $request->file('file_pdf')->isValid()) {
            $file = $request->file('file_pdf');
            $path = $file->storeAs('kertas_kerja', $file->getClientOriginalName(), 'public');
        } else {
            return back()->with('error', 'Terdapat kesalahan, file tidak tersimpan pada penyimpanan lokal');
        }

        sub_kertas_kerja::create([
            'kertas_kerja' => $request->kertas_kerja,
            'tahun' => $request->tahun,
            'deskripsi' => $request->deskripsi,
            'nomor' => $request->nomor,
            'kategori' => $request->kategori,
            'file_pdf' => $path,
        ]);

        return back()->with('success', 'Kertas Kerja created successfully.');
    }
}
