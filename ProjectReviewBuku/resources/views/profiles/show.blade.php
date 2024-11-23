@extends('layout.master')

@section('title', 'Detail Profil')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center mb-4">Detail Profil</h2>
                @if ($profile)
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $profile->user->name }}</h5>
                            <p class="card-text">Umur: {{ $profile->umur }}</p>
                            <p class="card-text">Alamat: {{ $profile->alamat }}</p>
                            <p class="card-text">Bio: {{ $profile->bio }}</p>
                            <p class="card-text">Email: {{ $profile->user->email }}</p>
                        </div>
                    </div>
                @else
                    <div class="col-md-12 text-center">Profil tidak tersedia</div>
                @endif
                <a href="{{ route('profiles.index') }}" class="btn btn-primary mt-3">Kembali</a>
            </div>
        </div>
    </div>
@endsection
