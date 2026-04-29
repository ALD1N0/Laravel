<?php

namespace App\Http\Controllers;

use App\Models\UangSaku;
use App\Models\Santri;
use Illuminate\Http\Request;

class UangSakuController extends Controller
{
    public function index()
    {
        $uangSaku = UangSaku::with('santri')->get();
        return view('uang_saku.index', compact('uangSaku'));
    }

    public function create()
    {
        $santri = Santri::all();
        return view('uang_saku.create', compact('santri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'santri_id' => 'required|exists:santri,id',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
            'deskripsi' => 'nullable|string',
        ]);

        UangSaku::create($request->all());
        return redirect()->route('uang_saku.index')->with('success', 'Uang saku berhasil ditambahkan.');
    }

    public function destroy($id)
    {
        $uangSaku = UangSaku::findOrFail($id);
        $uangSaku->delete();
        return redirect()->route('uang_saku.index')->with('success', 'Uang saku berhasil dihapus.');
    }
}
