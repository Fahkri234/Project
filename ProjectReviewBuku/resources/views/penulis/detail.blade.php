@extends('layout.master')

@section('title', 'Halaman Detail Penulis')

@section('content')
    <div class="container-fluid"> <!-- Container-fluid untuk mengisi seluruh lebar halaman -->
        <div class="row justify-content-center"> <!-- Row justify-content-center untuk mengatur posisi ke tengah -->
            <div class="col-md-8"> <!-- Mengurangi lebar konten agar tidak terlalu lebar -->
                <h3 class="text-left mb-4" style="font-size: 1.5em;">Halaman Detail Penulis</h3>
                <h1 class="text-center mb-4">{{ $penulis->nama }}</h1>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th style="width: 30%;">Tanggal Lahir</th>
                            <td>{{ $penulis->tgl_lahir }}</td>
                        </tr>
                        <tr>
                            <th>Asal</th>
                            <td>{{ $penulis->asal }}</td>
                        </tr>
                        <tr>
                            <th>Biografi</th>
                            <td>{{ $penulis->bio }}</td>
                        </tr>
                        <tr>
                            <th>Jumlah Buku</th>
                            <td>{{ $penulis->jumlah_buku }}</td>
                        </tr>
                    </table>
                </div>
                <a href="{{ url('/penulis') }}" class="btn btn-primary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection
