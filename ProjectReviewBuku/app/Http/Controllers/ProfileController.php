<?php

// App\Http\Controllers\ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = Auth::user();
        $profiles = $user ? [$user->profil] : []; // Ambil profil pengguna yang sedang login
        return view('profiles.index', compact('profiles'));
    }

    public function create()
    {
        return view('profiles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'umur' => 'required|integer|min:0',
            'alamat' => 'required|string|max:255',
            'bio' => 'nullable|string',
        ]);

        // Auth::user()->profil()->create([
        //     'umur' => $request->umur,
        //     'alamat' => $request->alamat,
        //     'bio' => $request->bio,
        // ]);

        return redirect()->route('profiles.index');
    }

    public function show()
    {
        $profile = Auth::user()->profil;

        if (!$profile) {
            abort(404, 'Profil tidak ditemukan.');
        }

        return view('profiles.show', compact('profile'));
    }

    public function edit()
    {
        $profile = Auth::user()->profil;

        if (!$profile) {
            abort(404, 'Profil tidak ditemukan.');
        }

        return view('profiles.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $profile = Auth::user()->profil;

        $request->validate([
            'umur' => 'required|integer|min:0',
            'alamat' => 'required|string|max:255',
            'bio' => 'nullable|string',
        ]);

        $profile->update([
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'bio' => $request->bio,
        ]);

        return redirect()->route('profiles.show');
    }

    public function destroy(): RedirectResponse
    {
        $profile = Auth::user()->profil;

        if (!$profile) {
            return redirect()->route('profiles.index')->with('error', 'Profil tidak ditemukan.');
        }

        $profile->delete();

        return redirect()->route('home')->with('success', 'Profil berhasil dihapus.');
    }
}



