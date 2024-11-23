@extends('layout.master')
@section('title', 'Halaman Edit Genre')
@section('content')

    <div class="form-wrapper">
        <div class="container">
            <form method="post" action="{{ route('genre.update', $genre->id) }}">
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
                    <input type="string" id="nama" name="nama" class="form-control" value="{{ $genre->nama }}">
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea id="text" name="deskripsi" class="form-control" rows="3">{{ $genre->deskripsi }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
    </div>

@endsection
