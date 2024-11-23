@extends('layout.master')

@section('content')
    <div class="container-fluid mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Edit Buku</h2> <!-- Perubahan judul card menjadi "Edit Buku" -->
                    </div>
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> Terdapat beberapa masalah dengan input Anda.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ route('buku.update', $buku->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="judul">Judul:</label>
                                <input type="text" class="form-control" id="judul" name="judul"
                                    value="{{ $buku->judul }}" required>
                            </div>
                            <div class="form-group">
                                <label for="sinopsis">Sinopsis:</label>
                                <textarea class="form-control" id="sinopsis" name="sinopsis" required>{{ $buku->sinopsis }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="tahun_penerbitan">Tahun Penerbitan:</label>
                                <div class="input-group input-group-sm">
                                    <select name="tahun_penerbitan" id="tahun_penerbitan" class="custom-select">
                                        @for ($tahun = date('Y'); $tahun >= 2017; $tahun--)
                                            <!-- Perbaikan pada loop tahun -->
                                            <option value="{{ $tahun }}"
                                                {{ $buku->tahun_penerbitan == $tahun ? 'selected' : '' }}>
                                                {{ $tahun }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="genre_id">Genre:</label><br>
                                @foreach ($genre as $item)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="genre_id"
                                            id="genre_{{ $item->id }}" value="{{ $item->id }}"
                                            {{ $buku->genre_id == $item->id ? 'checked' : '' }}>
                                        <!-- Perubahan untuk menandai radio button yang dipilih -->
                                        <label class="form-check-label"
                                            for="genre_{{ $item->id }}">{{ $item->nama }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label>Penulis:</label><br>
                                @foreach ($penulis as $item)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="penulis_id"
                                            id="penulis_{{ $item->id }}" value="{{ $item->id }}"
                                            {{ $buku->penulis_id == $item->id ? 'checked' : '' }}>
                                        <!-- Perubahan untuk menandai radio button yang dipilih -->
                                        <label class="form-check-label"
                                            for="penulis_{{ $item->id }}">{{ $item->nama }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="form-group">
                                <label>Penerbit:</label><br>
                                @foreach ($penerbit as $item)
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="penerbit_id"
                                            id="penerbit_{{ $item->id }}" value="{{ $item->id }}"
                                            {{ $buku->penerbit_id == $item->id ? 'checked' : '' }}>
                                        <!-- Perubahan untuk menandai radio button yang dipilih -->
                                        <label class="form-check-label"
                                            for="penerbit_{{ $item->id }}">{{ $item->nama }}</label>
                                    </div>
                                @endforeach
                            </div>
                            <div class="text-center">
                                <div class="btn-group" role="group" aria-label="Button group">
                                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                    <a class="btn btn-primary" href="{{ route('buku.index') }}">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
