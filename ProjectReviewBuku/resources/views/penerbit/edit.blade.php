@extends('layout.master')
@section('title', 'Halaman Edit Penerbit')
@section('content')

    <div class="form-wrapper">
        <div class="container">
            <form method="post" action="{{ route('penerbit.update', $penerbit->id) }}">
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
                    <input type="text" id="nama" name="nama" class="form-control" value="{{ $penerbit->nama }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" id="alamat" name="alamat" class="form-control"
                        value="{{ $penerbit->alamat }}">
                </div>
                <div class="form-group">
                    <label for="telepon">Telepon</label>
                    <input type="text" id="telepon" name="telepon" class="form-control"
                        value="{{ $penerbit->telepon }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ $penerbit->email }}">
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="text" id="website" name="website" class="form-control"
                        value="{{ $penerbit->website }}">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

@endsection
