<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Profil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'umur' => 'required|integer|min:0',
            'alamat' => 'required|string|max:255',
            'bio' => 'nullable|string',
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        Profil::create([
            'user_id' => $user->id,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'bio' => $request->bio,
        ]);
    
        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}
