@extends('layout.master')

@section('title', 'Halaman Tampilan Genre')

@section('content')
    <div class="container-fluid"> <!-- Container-fluid untuk mengisi seluruh lebar halaman -->
        <div class="row justify-content-center"> <!-- Row justify-content-center untuk mengatur posisi ke tengah -->
            <div class="col-md-10"> <!-- Mengurangi lebar konten agar tidak terlalu lebar -->
                <h2 class="text-center mb-4">Daftar Genre</h2>
                <a href="{{ url('/genre/create') }}" class="btn btn-success mb-3">Tambah Genre</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($genre as $genreItem)
                                <tr>
                                    <td class="text-center">{{ $genreItem->id }}</td>
                                    <td class="text-center">{{ $genreItem->nama }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ url('/genre/' . $genreItem->id . '/edit') }}"
                                                class="btn btn-warning btn-sm mr-2">Edit</a>
                                            <a href="{{ url('/genre/' . $genreItem->id) }}"
                                                class="btn btn-info btn-sm">Detail</a>
                                        </div>
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Daftar Genre belum ada</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <a href="{{ route ('home')}}" class="btn btn-primary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection
