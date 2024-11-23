@extends('layout.master')

@section('title', 'Halaman Tampilan Penerbit')

@section('content')
    <div class="container-fluid"> <!-- Container-fluid untuk mengisi seluruh lebar halaman -->
        <div class="row justify-content-center"> <!-- Row justify-content-center untuk mengatur posisi ke tengah -->
            <div class="col-md-10"> <!-- Mengurangi lebar konten agar tidak terlalu lebar -->
                <h2 class="text-center mb-4">Daftar Penerbit</h2>
                <a href="{{ url('/penerbit/create') }}" class="btn btn-success mb-3">Tambah Penerbit</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Alamat</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($penerbit as $penerbitItem)
                                <tr>
                                    <td class="text-center">{{ $penerbitItem->id }}</td>
                                    <td class="text-center">{{ $penerbitItem->nama }}</td>
                                    <td class="text-center">{{ $penerbitItem->alamat }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ url('/penerbit/' . $penerbitItem->id . '/edit') }}"
                                                class="btn btn-warning btn-sm mr-2">Edit</a>
                                            <a href="{{ url('/penerbit/' . $penerbitItem->id) }}"
                                                class="btn btn-info btn-sm">Detail</a>

                                        </div>
                                    </td>
                                </tr>

                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Daftar penerbit tidak tersedia</td>
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
