@extends('layout.master')

@section('content')
    <div class="container-fluid"> <!-- Container-fluid untuk mengisi seluruh lebar halaman -->
        <div class="row justify-content-center"> <!-- Row justify-content-center untuk mengatur posisi ke tengah -->
            <div class="col-md-10"> <!-- Mengurangi lebar konten agar tidak terlalu lebar -->
                <h2 class="text-center mb-4">Daftar Buku</h2>
                <a href="{{ route('buku.create') }}" class="btn btn-success mb-3">Tambah Buku</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Judul</th>
                                <th class="text-center">Sinopsis</th>
                                <th class="text-center">Tahun Penerbitan</th>
                                <th class="text-center">Genre</th>
                                <th class="text-center" width="280px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($buku as $key => $value)
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td class="text-center">{{ $value->judul }}</td>
                                    <td class="text-center">{{ $value->sinopsis }}</td>
                                    <td class="text-center">{{ $value->tahun_penerbitan }}</td>
                                    <td class="text-center">{{ $value->genre->nama }}</td>
                                    <!-- Mengambil deskripsi genre -->
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class="btn btn-info btn-sm"
                                                href="{{ route('buku.show', $value->id) }}">Show</a>
                                            <a class="btn btn-primary btn-sm"
                                                href="{{ route('buku.edit', $value->id) }}">Edit</a>
                                            <form action="{{ route('buku.destroy', $value->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">Daftar buku tidak tersedia</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
