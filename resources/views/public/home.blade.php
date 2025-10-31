@extends('layouts.public')

@section('title', 'Movies')

@section('content')
    <h2>All Movies</h2>
    <div class="row">
        @foreach($movies as $movie)
            <div class="col-md-3 mb-4">
                <div class="card">
                    @if($movie->poster)
                        <img src="{{ asset('storage/'.$movie->poster) }}" class="card-img-top" alt="{{ $movie->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $movie->title }}</h5>
                        <p class="card-text">{{ $movie->Description }}</p>
                        <h6 class="card-text">{{ $movie->category }}</h6>
                        <a href="{{ $movie->download_url }}" target="_blank" class="btn btn-primary">Download</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
