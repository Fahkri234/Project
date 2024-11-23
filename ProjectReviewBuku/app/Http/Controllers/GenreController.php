<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genre = Genre::all();
        return view("genre.view", ["genre" => $genre]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("genre.tambah");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required|min:4',
                'deskripsi' => 'required',
            ],
            [
                'nama.required' => 'Isilah Nama Anda!',
                'deskripsi.required' => 'Keterangan Genre Anda!',
            ]
        );
        $genre = new Genre;

        $genre->nama = $request->input('nama');
        $genre->deskripsi = $request->input('deskripsi');
        $genre->save();

        return redirect('/genre');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $genre = Genre::find($id);
        return view('genre.detail', ['genre' => $genre]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $genre = Genre::findOrFail($id);
        return view('genre.edit', compact('genre'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'deskripsi' => 'required',
        ]);

        // Temukan data penulis berdasarkan ID
        $penulis = Genre::findOrFail($id);

        // Simpan perubahan data yang diterima dari formulir
        $penulis->nama = $request->nama;
        $penulis->deskripsi = $request->deskripsi;
        $penulis->save();

        return redirect('/genre');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
