<?php

namespace App\Http\Controllers;

use App\Models\Santri;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // Hitung jumlah santri terdaftar
        $total = Santri::count();

        // Kirimkan ke view
        return view('dashboard', compact('total'));
    }
}
