<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerbit;

class PenerbitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penerbit = Penerbit::all();
        return view('penerbit.view', ['penerbit' => $penerbit]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penerbit.tambah');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required|min:4',
                'alamat' => 'required',
                'telepon' => 'required',
                'email' => 'required',
                'website' => 'required',
            ],
            [
                'nama.required' => 'Isilah Nama Anda!',
                'alamat.required' => 'Alamat Harus Diisi!',
                'telepon.required' => 'No Telepon Harus Diisi',
                'email.required' => 'Tulislah alamat email Anda!',
                'website.required' => 'Isi halaman website anda!',
            ]
        );

        $penerbit = new Penerbit;
        $penerbit->nama = $request->input('nama');
        $penerbit->alamat = $request->input('alamat');
        $penerbit->telepon = $request->input('telepon');
        $penerbit->email = $request->input('email');
        $penerbit->website = $request->input('website');
        $penerbit->save();

        return redirect('/penerbit');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penerbit = Penerbit::find($id);
        return view('penerbit.detail', ['penerbit' => $penerbit]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penerbit = Penerbit::findOrFail($id);
        return view('penerbit.edit', compact('penerbit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama' => 'required|min:4',
            'alamat' => 'required',
            'telepon' => 'required',
            'email' => 'required',
            'website' => 'required',
        ]);

        // Temukan data penerbit berdasarkan ID
        $penerbit = Penerbit::findOrFail($id);

        // Simpan perubahan data yang diterima dari formulir
        $penerbit->nama = $request->nama;
        $penerbit->alamat = $request->alamat;
        $penerbit->telepon = $request->telepon;
        $penerbit->email = $request->email;
        $penerbit->website = $request->website;
        $penerbit->save();

        return redirect('/penerbit');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penerbit = Penerbit::findOrFail($id);
        $penerbit->delete();

        return redirect('/penerbit');
    }
}
