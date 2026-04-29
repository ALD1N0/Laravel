<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    
    public function index()
{
    $posts = Post::with('user')->latest()->get(); // Mengambil data postingan dengan user terkait
    return view('home', compact('home'));
}

}
