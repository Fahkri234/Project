@extends('layout.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center mb-4">Detail Review</h2>
                <div class="card">
                    <div class="card-header">
                        Review ID: {{ $review->id }}
                    </div>
                    <div class="card-body">
                        <p><strong>Ulasan:</strong> {{ $review->ulasan }}</p>
                        <p><strong>Rating:</strong> {{ $review->rating }}</p>
                        <p><strong>Pendapat:</strong> {{ $review->pendapat }}</p>
                        <p><strong>Username:</strong> {{ $review->user->name }}</p>
                        <p><strong>Judul Buku:</strong> {{ $review->buku->judul }}</p>
                        <a href="{{ route('reviews.index') }}" class="btn btn-secondary">Kembali</a>
                        <a href="{{ route('reviews.edit', $review->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
