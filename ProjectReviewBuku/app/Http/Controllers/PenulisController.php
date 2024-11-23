<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penulis;

class PenulisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penulis = Penulis::all();
        return view("penulis.view", ["penulis" => $penulis]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("penulis.tambah");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required|min:4',
                'tgl_lahir' => 'required',
                'asal' => 'required',
                'bio' => 'required',
                'jumlah_buku' => 'required',
            ],
            [
                'nama.required' => 'Isilah Nama Anda!',
                'tgl_lahir.required' => 'Tanggal Lahir Harus Diisi!',
                'asal.required' => 'Dari Mana Anda Berasal?(Provinsi/Kota)',
                'bio.required' => 'Tulislah Bio Anda!',
                'jumlah_buku.required' => 'Berapa Jumlah Buku Yang Anda Tulis?',
            ]
        );
        $penulis = new Penulis;

        $penulis->nama = $request->input('nama');
        $penulis->tgl_lahir = $request->input('tgl_lahir');
        $penulis->asal = $request->input('asal');
        $penulis->bio = $request->input('bio');
        $penulis->jumlah_buku = $request->input('jumlah_buku');
        $penulis->save();

        return redirect('/penulis');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penulis = Penulis::find($id);
        return view('penulis.detail', ['penulis' => $penulis]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penulis = Penulis::findOrFail($id);
        return view('penulis.edit', compact('penulis'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'tgl_lahir' => 'required',
            'asal' => 'required',
            'bio' => 'required',
            'jumlah_buku' => 'required|integer|min:0',
        ]);

        // Temukan data penulis berdasarkan ID
        $penulis = Penulis::findOrFail($id);

        // Simpan perubahan data yang diterima dari formulir
        $penulis->nama = $request->nama;
        $penulis->tgl_lahir = $request->tgl_lahir;
        $penulis->asal = $request->asal;
        $penulis->bio = $request->bio;
        $penulis->jumlah_buku = $request->jumlah_buku;
        $penulis->save();

        return redirect('/penulis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
