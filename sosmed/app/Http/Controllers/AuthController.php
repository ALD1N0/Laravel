<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage; // Import Storage

class AuthController extends Controller
// {
//     public function register(Request $request)
//     {
//         // Validasi input
//         $validator = Validator::make($request->all(), [
//             'username' => 'required|string|max:50|unique:users',
//             'email' => 'required|string|email|max:100|unique:users',
//             'password' => 'required|string|confirmed|min:6',
//             'bio' => 'nullable|string',
//             'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk foto profil
//         ]);

//         if ($validator->fails()) {
//             return redirect()->route('register.view')
//                 ->withErrors($validator)
//                 ->withInput();
//         }

//         // Menyimpan foto profil jika ada
//         $profilePicturePath = null;
//         if ($request->hasFile('profile_picture')) {
//             $profilePicturePath = $request->file('profile_picture')->store('assets/foto', 'public'); // Menyimpan di storage/app/public/profile_pictures
//         }

//         // Membuat pengguna baru
//         User::create([
//             'username' => $request->username,
//             'email' => $request->email,
//             'password' => Hash::make($request->password),
//             'bio' => $request->bio,
//             'profile_picture' => $profilePicturePath, // Menyimpan path foto profil
//         ]);

//         return redirect()->route('register.view')->with('message', 'Pendaftaran berhasil!');
//     }
// }
{}