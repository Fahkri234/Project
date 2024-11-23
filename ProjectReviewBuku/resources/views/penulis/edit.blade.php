@extends('layout.master')
@section('title', 'Halaman Edit Penulis')
@section('content')

    <div class="form-wrapper">
        <div class="container">
            <form method="post" action="{{ route('penulis.update', $penulis->id) }}">
                @csrf
                @method('PUT')
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
                    <input type="string" id="nama" name="nama" class="form-control" value="{{ $penulis->nama }}">
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" id="tgl_lahir" name="tgl_lahir" class="form-control"
                        value="{{ $penulis->tgl_lahir }}">
                </div>
                <div class="form-group">
                    <label for="asal">Asal</label>
                    <input type="string" id="asal" name="asal" class="form-control" value="{{ $penulis->asal }}">
                </div>
                <div class="form-group">
                    <label for="bio">Bio</label>
                    <textarea id="text" name="bio" class="form-control" rows="3">{{ $penulis->bio }}</textarea>
                </div>
                <div class="form-group">
                    <label for="jumlah_buku">Jumlah Buku</label>
                    <input type="integer" id="jumlah_buku" name="jumlah_buku" class="form-control"
                        value="{{ $penulis->jumlah_buku }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

@endsection
