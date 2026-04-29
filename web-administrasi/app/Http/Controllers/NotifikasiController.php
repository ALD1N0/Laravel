<?php

namespace App\Http\Controllers;

use App\Models\Notifikasi;
use App\Models\Santri;
use Illuminate\Http\Request;

class NotifikasiController extends Controller
{
    public function index()
    {
        $notifikasi = Notifikasi::all();
        return view('notifikasi.index', compact('notifikasi'));
    }

    public function create()
    {
        $santri = Santri::all();
        return view('notifikasi.create', compact('santri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string',
            'pesan' => 'required|string',
            'penerima_id' => 'nullable|exists:santri,id',
            'tanggal_kirim' => 'required|date',
            'status' => 'required|in:dibaca,belum',
        ]);

        Notifikasi::create($request->all());
        return redirect()->route('notifikasi.index')->with('success', 'Notifikasi berhasil dikirim');
    }
}
