<?php

namespace App\Http\Controllers;

use App\Models\beritaacara;
use App\Http\Requests\StoreberitaacaraRequest;
use App\Http\Requests\UpdateberitaacaraRequest;
use Illuminate\Http\Request;

class BeritaacaraController extends Controller
{
    public function store(Request $request)
    {
        // Validate the input data
        $request->validate([
            'nomor' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'uraian' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'konseptor' => 'required|string|max:255',
            'catatan' => 'required|string|max:255',
            'status' => 'required|string|max:255',
            'file_pdf' => 'required|file|mimes:pdf|max:2048',
        ]);
    
        if ($request->hasFile('file_pdf') && $request->file('file_pdf')->isValid()) {
            $file = $request->file('file_pdf');
            $path = $file->store('beritaacara', 'public');
        } else {
            return back()->with('error', 'File upload failed. Please try again.');
        }
    
        beritaacara::create([
            'nomor' => $request->nomor,
            'nama' => $request->nama,
            'uraian' => $request->uraian,
            'tanggal' => $request->tanggal,
            'konseptor' => $request->konseptor,
            'catatan' => $request->catatan,
            'status' => $request->status,
            'file_pdf' => $path,
        ]);
    
        return back()->with('success', 'Berita Acara berhasil ditambahkan.');
    }
}
