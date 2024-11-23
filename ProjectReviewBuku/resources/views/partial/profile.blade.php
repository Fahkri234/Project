@extends('layout.master')

@section('content')
<<<<<<< Updated upstream
=======

>>>>>>> Stashed changes
    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Profil Pengguna</div>
                        <div class="card-body">
                            <div class="mb-3">
                                {{-- <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a> --}}
                            </div>
                            <form method="POST"
                                action="{{ isset($profil) ? route('profile.update') : route('profile.store') }}">
                                @csrf
                                @if (isset($profil))
                                    @method('PUT')
                                @endif
                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"
                                            value="{{ Auth::user()->email }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name"
                                            value="{{ Auth::user()->name }}" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="umur" class="col-md-4 col-form-label text-md-right">Umur</label>
                                    <div class="col-md-6">
                                        <input id="umur" type="number" class="form-control" name="umur"
                                            value="{{ $profil->umur ?? '' }}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="alamat" class="col-md-4 col-form-label text-md-right">Alamat</label>
                                    <div class="col-md-6">
                                        <input id="alamat" type="text" class="form-control" name="alamat"
                                            value="{{ $profil->alamat ?? '' }}" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="bio" class="col-md-4 col-form-label text-md-right">Bio</label>
                                    <div class="col-md-6">
                                        <textarea id="bio" class="form-control" name="bio" rows="3">{{ $profil->bio ?? '' }}</textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ isset($profil) ? 'Update' : 'Add' }}
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
<<<<<<< Updated upstream
                    <div class="form-group">
                        <label>Username</label>
                        <br>
                        <input type="text" class="form-control" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label>Umur</label>
                        <br>
                        <input type="integer" class="form-control" placeholder="umur">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Bio</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="button" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </body>
@endsection
=======

                    <body>
                        <div class="form-wrapper">
                            <div class="container">
                                <form>
                                    @csrf
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <br>
                                        <input type="text" class="form-control" placeholder="email">
                                    </div>
                                    <div class="form-group">
                                        <label>Username</label>
                                        <br>
                                        <input type="text" class="form-control" placeholder="username">
                                    </div>
                                    <div class="form-group">
                                        <label>Umur</label>
                                        <br>
                                        <input type="integer" class="form-control" placeholder="umur">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Bio</label>
                                        <textarea class="form-control" rows="3"></textarea>
                                    </div>
                                    <button type="button" class="btn btn-success">Simpan</button>
                                </form>
                            </div>
                        </div>
                    </body>
                @endsection
>>>>>>> Stashed changes
