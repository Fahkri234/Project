@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center mb-4">Edit Review</h2>
                <form action="{{ route('reviews.update', $review->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="ulasan">Ulasan</label>
                        <textarea class="form-control" id="ulasan" name="ulasan" required>{{ $review->ulasan }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="rating">Rating</label>
                        <input type="number" class="form-control" id="rating" name="rating" value="{{ $review->rating }}" required>
                    </div>
                    <div class="form-group">
                        <label for="pendapat">Pendapat</label>
                        <textarea class="form-control" id="pendapat" name="pendapat">{{ $review->pendapat }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="user_id">User</label>
                        <select class="form-control" id="user_id" name="user_id" required>
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}" {{ $user->id == $review->user_id ? 'selected' : '' }}>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="buku_id">Buku</label>
                        <select class="form-control" id="buku_id" name="buku_id" required>
                            @foreach ($bukus as $buku)
                                <option value="{{ $buku->id }}" {{ $buku->id == $review->buku_id ? 'selected' : '' }}>{{ $buku->judul }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </form>
            </div>
        </div>
    </div>
@endsection
