@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="container mt-5">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Jumbotrons</h1>
            <a href="{{ route('jumbotron.create') }}" class="btn btn-success">Create New Jumbotron</a>
        </div>
        <!-- Rest of your index view code -->
    </div>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach($jumbotrons as $jumbotron)
        <div class="col">
            <div class="card h-100 shadow-sm">
                <img src="{{ asset('storage/' . $jumbotron->image) }}" class="card-img-top" alt="{{ $jumbotron->title }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $jumbotron->title }}</h5>
                    <p class="card-text">{{ Str::limit($jumbotron->content, 100) }}</p>
                </div>
                <div class="card-footer bg-transparent border-top-0">
                    <a class="btn btn-primary btn-sm" href="{{ route('jumbotron.show', $jumbotron->id) }}">View</a>
                    <a href="{{ route('jumbotron.edit', ['jumbotron' => $jumbotron->id]) }}" class="btn btn-warning btn-sm">Edit</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
