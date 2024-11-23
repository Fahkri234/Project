@extends('layout.master')

@section('title', 'Halaman Detail Genre')

@section('content')
    <div class="container-fluid"> <!-- Container-fluid untuk mengisi seluruh lebar halaman -->
        <div class="row justify-content-center"> <!-- Row justify-content-center untuk mengatur posisi ke tengah -->
            <div class="col-md-8"> <!-- Mengurangi lebar konten agar tidak terlalu lebar -->
                <h3 class="text-left mb-4" style="font-size: 1.5em;">Halaman Detail Genre</h3>
                <h1 class="text-center mb-4">{{ $genre->nama }}</h1>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th>Deskripsi</th>
                            <td>{{ $genre->deskripsi }}</td>
                        </tr>
                    </table>
                </div>
                <a href="{{ url('/genre') }}" class="btn btn-primary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection
