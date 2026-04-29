<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyControllers extends Controller
{
    public function home()
    {
        return view('home'); // Ganti dengan nama view yang sesuai
    }

    public function messages()
    {
        return view('messages'); // Ganti dengan nama view yang sesuai
    }

    // Tambahkan metode lain untuk notifications, profile, more
}
