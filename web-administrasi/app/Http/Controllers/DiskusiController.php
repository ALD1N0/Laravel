<?php

namespace App\Http\Controllers;

use App\Models\Diskusi;
use App\Models\Santri;
use Illuminate\Http\Request;

class DiskusiController extends Controller
{
    public function index()
    {
        $diskusi = Diskusi::with('pengirim')->latest()->get();
        // Mengambil seluruh data santri untuk dipilih saat menulis diskusi
        $santri = Santri::all();
        return view('diskusi.index', compact('diskusi'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'pengirim_id' => 'required|exists:santri,id',
            'pesan' => 'required|string|max:1000',
        ]);

        Diskusi::create($request->all());
        return redirect()->route('diskusi.index')->with('success', 'Pesan diskusi berhasil dikirim.');
    }
}

