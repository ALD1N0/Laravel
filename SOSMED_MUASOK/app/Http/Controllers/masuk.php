<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class masuk extends Controller
{
    //
    public function login(Request $request)
    {
        $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt(credentials: $credentials)) {
            $request->session()->regenerate();
            $user = Auth::user();
            $request->session()->put('user', [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
            ]);
            return redirect()->intended('/');
        } else {
            return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
        }
    }

}
