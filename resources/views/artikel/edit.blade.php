@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Edit Artikel</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $artikel->title) }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ old('content', $artikel->content) }}</textarea>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            @if($artikel->gambar)
                <div class="mb-2">
                    <img src="{{ asset('storage/' . $artikel->gambar) }}" width="150" alt="Gambar Artikel">
                </div>
            @endif
            <input type="file" class="form-control" id="gambar" name="gambar">
        </div>
        <div class="mb-3">
            <label for="tanggal_publish" class="form-label">Tanggal Publish</label>
            <input type="date" class="form-control" id="tanggal_publish" name="tanggal_publish" value="{{ old('tanggal_publish', $artikel->tanggal_publish) }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Perbarui</button>
    </form>
</div>
@endsection
