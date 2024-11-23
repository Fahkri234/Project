@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center mb-4">Detail Buku</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <th class="text-center" style="width: 20%;">Judul</th>
                                        <td>{{ $buku->judul }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Sinopsis</th>
                                        <td>{{ $buku->sinopsis }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Tahun Penerbitan</th>
                                        <td>{{ $buku->tahun_penerbitan }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Genre</th>
                                        <td>{{ $buku->genre->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Deskripsi Genre</th>
                                        <td>{{ $buku->genre->deskripsi }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Penulis</th>
                                        <td>{{ $buku->penulis->nama }}</td>
                                    </tr>
                                    <tr>
                                        <th class="text-center">Penerbit</th>
                                        <td>{{ $buku->penerbit->nama }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <a class="btn btn-primary mt-3" href="{{ route('buku.index') }}">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
