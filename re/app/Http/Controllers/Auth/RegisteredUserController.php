<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
{
    $request->validate([
        'name' => [
            'required',
            'string',
            'unique:users,name',
            'max:50'
        ],
        'email' => [
            'required',
            'string',
            'email',
            'max:255',
            'unique:users,email'
        ],
        'password' => [
            'required',
            'string',
            'min:8',
            'confirmed',
            Rules\Password::defaults()
        ],
        'profile_picture' => [
            'nullable',
            'image',
            'mimes:jpeg,png,jpg,gif',
            'max:2048'
        ],
        'bio' => [
            'nullable',
            'string',
            'max:500'
        ],
    ]);

    $profilePicturePath = null;

    // Jika ada gambar yang diupload
    if ($request->hasFile('profile_picture')) {
        $file = $request->file('profile_picture');
        $profilePicturePath = $file->store('profile_pictures', 'public'); // Simpan di storage/app/public/profile_pictures
    }

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'profile_picture' => $profilePicturePath, // Simpan path gambar di database
        'bio' => $request->bio, // Simpan bio
    ]);

    event(new Registered($user));

    Auth::login($user);

    return redirect(RouteServiceProvider::LOGIN);
}
}
