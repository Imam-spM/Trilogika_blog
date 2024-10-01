@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Detail Alumni</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('alumni.index') }}"> Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $alumni->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar:</strong>
                @if($alumni->gambar)
                    <img src="{{ asset('storage/alumni/'.$alumni->gambar) }}" width="300px">
                @else
                    <p>Tidak ada gambar</p>
                @endif
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Content:</strong>
                {{ $alumni->content }}
            </div>
        </div>
    </div>
</div>
@endsection
