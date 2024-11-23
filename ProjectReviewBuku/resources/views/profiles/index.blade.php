@extends('layout.master')

@section('title', 'Halaman Tampilan Profil')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-4">Profil Saya</h2>
                <a href="{{ route('profiles.create') }}" class="btn btn-primary mb-3">Tambah Profil</a>
                <div class="row justify-content-center">
                    @forelse ($profiles as $profile)
                        <div class="col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    @if ($profile)
                                        <h5 class="card-title">{{ $profile->user->name }}</h5>
                                        <p class="card-text">Umur: {{ $profile->umur }}</p>
                                        <p class="card-text">Alamat: {{ $profile->alamat }}</p>
                                        <p class="card-text">Bio: {{ $profile->bio }}</p>
                                        <p class="card-text">Email: {{ $profile->user->email }}</p>
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a href="{{ route('profiles.edit', $profile->id) }}"
                                                class="btn btn-warning btn-sm mr-2">Edit</a>
                                            <a href="{{ route('profiles.show', $profile->id) }}"
                                                class="btn btn-info btn-sm">Detail</a>
                                        </div>
                                    @else
                                        <p class="text-danger">User tidak ditemukan</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-md-12 text-center">Profil tidak tersedia</div>
                    @endforelse
                </div>
                <a href="{{ route('home') }}" class="btn btn-primary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection
