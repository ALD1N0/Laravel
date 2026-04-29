<?php

namespace App\Http\Controllers;

use App\Models\Pembayaran;
use App\Models\Santri;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::with('santri')->get();
        return view('pembayaran.index', compact('pembayaran'));
    }

    public function create()
    {
        $santri = Santri::all();
        return view('pembayaran.create', compact('santri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'santri_id' => 'required|exists:santri,id',
            'jumlah' => 'required|numeric',
            'tanggal' => 'required|date',
            'status' => 'required|in:lunas,tunda',
        ]);

        Pembayaran::create($request->all());
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil ditambahkan.');
    }

    public function edit($id){
        $pembayaran = Pembayaran::findOrFail($id); // Mencari data pembayaran berdasarkan ID
        $santri = Santri::all(); // Mendapatkan semua data santri untuk dropdown
        return view('pembayaran.edit', compact('pembayaran', 'santri'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'santri_id' => 'required|exists:santri,id',
            'jumlah' => 'required|numeric|min:1',
            'tanggal' => 'required|date',
            'status' => 'required|in:lunas,tunda',
        ]);
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->update($request->all());
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $pembayaran = Pembayaran::findOrFail($id);
        $pembayaran->delete();
        return redirect()->route('pembayaran.index')->with('success', 'Pembayaran berhasil dihapus.');
    }
}
