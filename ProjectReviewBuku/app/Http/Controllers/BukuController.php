<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Genre;
use App\Models\Penulis;
use App\Models\Penerbit;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        $genre = Genre::all(); // Mengambil semua genre dari database
        $penulis = Penulis::all(); // Mengambil semua penulis dari database
        $penerbit = Penerbit::all(); // Mengambil semua penerbit dari database
        // Meneruskan data genre, penulis, dan penerbit ke view
        return view('buku.create', compact('genre', 'penulis', 'penerbit'));
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima dari formulir
        $request->validate([
            'judul' => 'required|string|max:255',
            'sinopsis' => 'required|string',
            'tahun_penerbitan' => 'required|integer|min:1900',
            'genre_id' => 'required|exists:genre,id',
            'penulis_id' => 'required|exists:penulis,id',
            'penerbit_id' => 'required|exists:penerbit,id',
        ]);

        // Simpan data buku ke dalam database
        Buku::create($request->all());

        // Redirect pengguna ke halaman yang sesuai setelah berhasil menyimpan data
        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan.');
    }


    public function show(Buku $buku)
    {
        return view('buku.show', compact('buku'));
    }

    public function edit(Buku $buku)
    {
        $genre = Genre::all(); // Mengambil semua genre dari database
        $penulis = Penulis::all(); // Mengambil semua penulis dari database
        $penerbit = Penerbit::all(); // Mengambil semua penerbit dari database

        return view('buku.edit', compact('buku', 'genre', 'penulis', 'penerbit'));
    }

    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'sinopsis' => 'required|string',
            'tahun_penerbitan' => 'required|integer|min:1900',
            'genre_id' => 'required|exists:genre,id',
            'penulis_id' => 'required|exists:penulis,id',
            'penerbit_id' => 'required|exists:penerbit,id',
        ]);

        $buku->update($request->all());

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui.');
    }

    public function destroy(Buku $buku)
    {
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus.');
    }
}
