@extends('layouts.admin')

@section('title', 'Jumbotron')

@section('content')
<div class="container">
    <h1>Daftar Jumbotron</h1>
    <a href="{{ route('jumbotron.create') }}" class="btn btn-primary mb-3">Buat Jumbotron Baru</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Judul</th>
                    <th>Konten</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($jumbotrons as $jumbotron)
                    <tr>
                        <td>{{ $jumbotron->title }}</td>
                        <td>{{ Str::limit($jumbotron->content, 100) }}</td>
                        <td><img src="{{ asset('storage/' . $jumbotron->image) }}" width="100"></td>
                        <td>
                            <a href="{{ route('jumbotron.edit', $jumbotron->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('jumbotron.destroy', $jumbotron->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus jumbotron ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
