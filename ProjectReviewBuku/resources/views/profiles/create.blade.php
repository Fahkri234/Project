@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Tambah Profil</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('profiles.store') }}">
                            @csrf

                            <div class="form-group">
                                <label for="umur">Umur</label>
                                <input id="umur" type="number" class="form-control" name="umur" required autofocus>
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input id="alamat" type="text" class="form-control" name="alamat" required>
                            </div>

                            <div class="form-group">
                                <label for="bio">Bio</label>
                                <textarea id="bio" class="form-control" name="bio"></textarea>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    Tambah Profil
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
