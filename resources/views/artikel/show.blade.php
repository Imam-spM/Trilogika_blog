<!-- resources/views/artikel/show.blade.php -->

@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $artikel->title }}</h1>
    <p><strong>Tanggal Publish:</strong> {{ \Carbon\Carbon::parse($artikel->tanggal_publish)->format('d M Y') }}</p>
    @if($artikel->gambar)
    <img src="{{ asset('storage/' . $artikel->gambar) }}" class="img-fluid mb-3" alt="Gambar Artikel">
    @endif
    <div>
        {!! nl2br(e($artikel->content)) !!}
    </div>
    <a href="{{ route('artikel.index') }}" class="btn btn-secondary mt-3">Kembali ke Daftar</a>
</div>
@endsection
