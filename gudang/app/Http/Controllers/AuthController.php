<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman registrasi
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Menangani registrasi
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|string|unique:users|max:50',
            'email' => 'required|string|email|unique:users|max:100',
            'password' => 'required|string|min:8|confirmed',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi untuk gambar
            'bio' => 'nullable|string|max:500', // Max length sesuai dengan database
        ]);

        $profilePicturePath = null;

        // Jika ada gambar yang diupload
        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $profilePicturePath = $file->store('profile_pictures', 'public'); // Simpan di storage/app/public/profile_pictures
        }

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile_picture' => $profilePicturePath, // Simpan path gambar di database
            'bio' => $request->bio, // Simpan bio
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Menangani login
   
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt(credentials: $credentials)) {
            return redirect()->route('posting.index');
        } else {
            return redirect()->back()->withErrors(['email' => 'Email atau password salah']);
        }
    }

    
    // Menangani logout
    // public function logout()
    // {
    //     Auth::logout();
    //     return redirect()->route('auth.login');
    // }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    
}
