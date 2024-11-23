@extends('layout.master')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-4">Daftar Review</h2>
                <a href="{{ route('reviews.create') }}" class="btn btn-success mb-3">Tambah Review</a>
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead class="thead-dark">
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Ulasan</th>
                                <th class="text-center">Rating</th>
                                <th class="text-center">Pendapat</th>
                                <th class="text-center">User</th>
                                <th class="text-center">Buku</th>
                                <th class="text-center" width="280px">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($reviews as $key => $review)
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td>{{ $review->ulasan }}</td>
                                    <td class="text-center">{{ $review->rating }}</td>
                                    <td>{{ $review->pendapat }}</td>
                                    <td class="text-center">{{ $review->user->name }}</td>
                                    <td class="text-center">{{ $review->buku->judul }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Basic example">
                                            <a class="btn btn-info btn-sm" href="{{ route('reviews.show', $review->id) }}">Show</a>
                                            <a class="btn btn-primary btn-sm" href="{{ route('reviews.edit', $review->id) }}">Edit</a>
                                            <form action="{{ route('reviews.destroy', $review->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Daftar review tidak tersedia</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
