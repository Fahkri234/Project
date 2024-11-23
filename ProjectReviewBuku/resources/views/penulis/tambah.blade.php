@extends('layout.master')
@section('title', 'Halaman Tambah Penulis')
@section('content')

    <div class="form-wrapper">
        <div class="container">
            <form method="post" action="/penulis">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="string" id="nama" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control">
                </div>
                <div class="form-group">
                    <label for="asal">Asal</label>
                    <input type="string" id="asal" name="asal" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea id="text" name="bio" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="jumlah_buku">Jumlah Buku</label>
                    <input type="integer" id="jumlah_buku" name="jumlah_buku" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

@endsection
