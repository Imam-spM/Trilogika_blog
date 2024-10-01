@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mb-4">Daftar Alumni</h1>
    <a href="{{ route('alumni.create') }}" class="btn btn-primary mb-3">Tambah Alumni Baru</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="row">
        @foreach ($alumni as $alum)
        <div class="col-md-4 mb-4">
            <div class="card">
                @if($alum->gambar)
                    <img src="{{ asset('storage/alumni/'.$alum->gambar) }}" class="card-img-top" alt="{{ $alum->nama }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $alum->nama }}</h5>
                    <p class="card-text">{{ Str::limit($alum->content, 100) }}</p>
                    <a href="{{ route('alumni.show', $alum->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('alumni.edit', $alum->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('alumni.destroy', $alum->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{ $alumni->links() }}
</div>
@endsection
