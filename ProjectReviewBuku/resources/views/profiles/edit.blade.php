@extends('layout.master')

@section('title', 'Edit Profil')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center mb-4">Edit Profil</h2>
                @if ($profile)
                    <form action="{{ route('profiles.update') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="umur">Umur</label>
                            <input type="number" name="umur" class="form-control" value="{{ $profile->umur }}" required>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" name="alamat" class="form-control" value="{{ $profile->alamat }}" required>
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea name="bio" class="form-control">{{ $profile->bio }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Profil</button>
                        <a href="{{ route('profiles.index') }}" class="btn btn-secondary">Kembali</a>
                    </form>
                @else
                    <div class="col-md-12 text-center">Profil tidak tersedia</div>
                @endif
            </div>
        </div>
    </div>
@endsection
