@extends('layout.master')
@section('title', 'Halaman Tambah Penerbit')
@section('content')

    <div class="form-wrapper">
        <div class="container">
            <form method="post" action="/penerbit">
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
                    <input type="varchar" id="nama" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="varchar" id="alamat" name="alamat" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="integer" id="telepon" name="telepon" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <textarea id="varchar" name="email" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="website">Website</label>
                    <input type="varchar" id="website" name="website" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

@endsection
