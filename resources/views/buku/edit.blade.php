@extends('layouts.app')

@section('content')
    <h3>Edit Buku</h3>

    <form action="{{ route('buku.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul:</label><br>
        <input type="text" name="judul" value="{{ $book->judul }}" required><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="{{ $book->penulis }}" required><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun_terbit" value="{{ $book->tahun_terbit }}" required><br><br>

        {{-- <label>Stok:</label><br>
        <input type="number" name="stok" value="{{ $book->stok }}" required><br><br> --}}

         <label for="stok" class="form-label">Stok</label>
        <input type="number" class="form-control" id="stok" name="stok" value="{{ $book->stok }}" required>

        <button type="submit">Update</button>
        <a href="{{ route('buku.index') }}">Batal</a>
    </form>
@endsection
