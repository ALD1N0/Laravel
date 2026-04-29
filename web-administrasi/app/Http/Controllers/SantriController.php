<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Http\Request;

class SantriController extends Controller
{
    public function index(Request $request){
        // Mulai query dengan model Santri
        $query = Santri::query();
        
        // Filter pencarian jika parameter 'search' ada
        if ($request->has('search') && $request->search !== '') {
            $query->where('nama', 'like', '%' . $request->search . '%');
        }
        // Paginasi hasil query
        $santri = $query->paginate(10);
        // Return view dengan data
        return view('santri.index', compact('santri'));
    }

    public function create()
    {
        return view('santri.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'nama_orang_tua' => 'required|string',
            'kontak_orang_tua' => 'required|string',
        ]);

        Santri::create($request->all());
        return redirect()->route('santri.index')->with('success', 'Santri berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $santri = Santri::findOrFail($id);
        return view('santri.edit', compact('santri'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required|string',
            'nama_orang_tua' => 'required|string',
            'kontak_orang_tua' => 'required|string',
        ]);

        $santri = Santri::findOrFail($id);
        $santri->update($request->all());
        return redirect()->route('santri.index')->with('success', 'Santri berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $santri = Santri::findOrFail($id);
        $santri->delete();
        return redirect()->route('santri.index')->with('success', 'Santri berhasil dihapus.');
    }
    
}
