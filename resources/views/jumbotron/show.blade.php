@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <img src="{{ asset('storage/' . $jumbotron->image) }}" class="card-img-top" alt="{{ $jumbotron->title }}">
                <div class="card-body">
                    <h1 class="card-title">{{ $jumbotron->title }}</h1>
                    <p class="card-text">{{ $jumbotron->content }}</p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('jumbotron.edit', $jumbotron) }}" class="btn btn-primary">Edit</a>
                        <a href="{{ route('jumbotron.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
