@extends('layouts.app')

@section('content')
    <h3>Detail Buku</h3>

    <p><strong>Judul:</strong> {{ $book->judul }}</p>
    <p><strong>Penulis:</strong> {{ $book->penulis }}</p>
    <p><strong>Tahun Terbit:</strong> {{ $book->tahun_terbit }}</p>
    <p><strong>Stok:</strong> {{ $book->stok }}</p>

    <a href="{{ route('buku.index') }}">Kembali ke Daftar Buku</a>
@endsection
