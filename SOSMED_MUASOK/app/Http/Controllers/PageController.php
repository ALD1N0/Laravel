<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home()
    {
        return view('home'); // Ganti dengan nama view yang sesuai
    }

    public function notifications()
    {
        return view('notifications'); // Ganti dengan nama view yang sesuai
    }

    public function messages()
    {
        return view('messages'); // Ganti dengan nama view yang sesuai
    }

    public function profile()
    {
        return view('profile'); // Ganti dengan nama view yang sesuai
    }

    public function more()
    {
        return view('more'); // Ganti dengan nama view yang sesuai
    }
}
