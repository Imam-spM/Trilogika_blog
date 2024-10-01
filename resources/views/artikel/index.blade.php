@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Daftar Artikel</h1>
    <a href="{{ route('artikel.create') }}" class="btn btn-primary mb-3">Buat Artikel Baru</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Judul</th>
                <th>Konten</th>
                <th>Gambar</th>
                <th>Tanggal Publish</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artikel as $item)
                <tr>
                    <td>{{ $item->title }}</td>
                    <td>{{ Str::limit($item->content, 100) }}</td>
                    <td><img src="{{ asset('storage/' . $item->gambar) }}" width="100"></td>
                    <td>{{ $item->tanggal_publish }}</td>
                    <td>
                        <a href="{{ route('artikel.show', $item->id) }}" class="btn btn-info">Lihat</a>
                        <a href="{{ route('artikel.edit', $item->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('artikel.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus artikel ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
