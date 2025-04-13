<?php

namespace App\Http\Controllers;

use App\Models\peraturan_daerah;
use App\Http\Requests\Storeperaturan_daerahRequest;
use App\Http\Requests\Updateperaturan_daerahRequest;
use Illuminate\Http\Request;

class PeraturanDaerahController extends Controller
{
    public function store(Request $request)
{
    // Validate the input data
    $request->validate([
        'nomor' => 'required|string|max:255',
        'nama_surat' => 'required|string|max:255',
        'jenis' => 'required|string|max:255',
        'tanggal_terbit' => 'required|date',
        'tanggal_terundang' => 'required|date',
        'deskripsi' => 'required|string|max:255',
        'status' => 'required|string|max:255',
        'file_pdf' => 'required|file|mimes:pdf|max:2048',
    ]);

    if ($request->hasFile('file_pdf') && $request->file('file_pdf')->isValid()) {
        $file = $request->file('file_pdf');
        $path = $file->store('peraturan_daerah', 'public');
    } else {
        return back()->with('error', 'File upload failed. Please try again.');
    }

    peraturan_daerah::create([
        'nomor' => $request->nomor,
        'nama_surat' => $request->nama_surat,
        'jenis' => $request->jenis,
        'tanggal_terbit' => $request->tanggal_terbit,
        'tanggal_terundang' => $request->tanggal_terundang,
        'deskripsi' => $request->deskripsi,
        'status' => $request->status,
        'file_pdf' => $path,
    ]);

    // return back()->with('success', 'Peraturan Daerah berhasil ditambahkan.');
}

}
