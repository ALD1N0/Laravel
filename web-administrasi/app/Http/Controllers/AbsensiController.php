<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Santri;
use Illuminate\Http\Request;

class AbsensiController extends Controller
{
    public function index()
    {
        $absensi = Absensi::with('santri')->get();
        return view('absensi.index', compact('absensi'));
    }

    public function create()
    {
        $santri = Santri::all();
        return view('absensi.create', compact('santri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'santri_id' => 'required|exists:santri,id',
            'tanggal' => 'required|date',
            'status_kehadiran' => 'required|in:hadir,izin,sakit,alfa',
        ]);

        Absensi::create($request->all());
        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $absensi = Absensi::findOrFail($id);
        $absensi->delete();
        return redirect()->route('absensi.index')->with('success', 'Absensi berhasil dihapus.');
    }
}
