@extends('layouts.admin')

@section('title', 'Movies')

@section('content')
<h2>All Movies</h2>

<div class="d-flex justify-content-between mb-3">
    <a href="{{ route('admin.movies.create') }}" class="btn btn-primary">Add Movie</a>
</div>
<div class="row">
    @foreach($movies as $movie)
    <div class="col-md-3 mb-4">
        <div class="card">
            @if($movie->poster)
            <img src="{{ asset('storage/' . $movie->poster) }}" class="card-img-top" alt="{{ $movie->title }}">
            @endif
            <div class="card-body">
                <h5 class="card-title">{{ $movie->title }}</h5>
                <p class="card-text">{{ $movie->Description }}</p>
                <h6 class="card-text">{{ $movie->category }}</h6>
                <a href="{{ $movie->download_url }}" target="_blank" class="btn btn-primary">Download</a>
                <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST"
                    style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Are you sure?')" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
