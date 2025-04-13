<?php

namespace App\Http\Controllers;

use App\Models\laporanhasilaudit;
use App\Http\Requests\StorelaporanhasilauditRequest;
use App\Http\Requests\UpdatelaporanhasilauditRequest;
use Illuminate\Http\Request;

class LaporanhasilauditController extends Controller
{
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'nomor' => 'required|string|max:255',
            'nama_lha' => 'required|string|max:255',
            'uraian_lha' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'Notulis' => 'required|string|max:255',
            'Catatan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'file_pdf' => 'required|file|mimes:pdf|max:2048',
        ]);
    
        if ($request->hasFile('file_pdf') && $request->file('file_pdf')->isValid()) {
            $file = $request->file('file_pdf');
            $path = $file->store('laporanhasilaudit', 'public');
        } else {
            return back()->with('error', 'File upload failed. Please try again.');
        }
    
        laporanhasilaudit::create([
            'nomor' => $request->nomor,
            'nama_lha' => $request->nama_lha,
            'uraian_lha' => $request->uraian_lha,
            'tanggal' => $request->tanggal,
            'Notulis' => $request->Notulis,
            'Catatan' => $request->Catatan,
            'status' => $request->status,
            'file_pdf' => $path,
        ]);
    
        return back()->with('success', 'Laporan Hasil Audit berhasil ditambahkan.');
    }
}
