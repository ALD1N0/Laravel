<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Posts::with('user')->get(); // Mengambil semua post beserta relasi user
        dd($posts); // Dump dan die untuk memeriksa data
        return view('posts', compact('posts'));
    }
}
