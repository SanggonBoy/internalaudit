<?php

namespace App\Http\Controllers;

use App\Models\kertas_kerja;
use App\Http\Requests\Storekertas_kerjaRequest;
use App\Http\Requests\Updatekertas_kerjaRequest;
use Illuminate\Http\Request;

class KertasKerjaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'tahun' => 'required',
            'deskripsi' => 'required',
        ]);

        kertas_kerja::create([
            'tahun' => $request->tahun,
            'deskripsi' => $request->deskripsi,
        ]);
        return back()->with('success', 'Kertas Kerja created successfully.');
    }
}
