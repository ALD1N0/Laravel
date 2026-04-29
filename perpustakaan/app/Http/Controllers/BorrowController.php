<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Borrow;
use App\Models\Book;
use App\Models\Member;
class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $borrows = Borrow::with('member', 'book')->get(); // Mengambil semua data peminjaman beserta relasi
        return view('borrow.index', compact('borrows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::all(); // Mengambil semua anggota
        $books = Book::all(); // Mengambil semua buku
        return view('borrow.create', compact('members', 'books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'member_id' => 'required|exists:members,id',
            'book_id' => 'required|exists:books,id',
            'borrow_date' => 'required|date',
            'return_date' => 'nullable|date|after_or_equal:borrow_date',
        ]);

        // Simpan data peminjaman
        Borrow::create($request->all());

        return redirect()->route('borrow.index')->with('success', 'Peminjaman berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    $borrow = Borrow::findOrFail($id); // Mengambil data peminjaman berdasarkan ID
    $books = Book::all(); // Mengambil semua data buku
    $members = Member::all(); // Mengambil semua data anggota
    return view('borrow.edit', compact('borrow', 'books', 'members')); // Menampilkan halaman edit dengan data peminjaman, buku, dan anggota
}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'book_id' => 'required|exists:books,id',
            'member_id' => 'required|exists:members,id',
            'borrowed_at' => 'required|date',
            'returned_at' => 'nullable|date|after_or_equal:borrowed_at',
        ]);
    
        $borrow = Borrow::findOrFail($id);
        $borrow->update($request->all()); // Memperbarui data peminjaman dengan input form
    
        return redirect()->route('borrow.index')->with('success', 'Peminjaman berhasil diperbarui');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrow $borrow)
    {
        $borrow->delete(); // Hapus data peminjaman
        return redirect()->route('borrow.index')->with('success', 'Peminjaman berhasil dihapus.');
    }
}
