@extends('layouts.admin')

@section('title', 'Edit Movie')

@section('content')
    <h2>Edit Movie</h2>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul>
        </div>
    @endif
    <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $movie->title }}" required>
        </div>
        <div class="mb-3">
            <label>Description</label>
            <input type="text" name="Description" class="form-control" value="{{ $movie->Description }}">
        </div>
        <div class="mb-3">
            <label>Category</label>
            <input type="text" name="category" class="form-control" value="{{ $movie->category }}">
        </div>
        <div class="mb-3">
            <label>Poster</label>
            @if($movie->poster)
                <img src="{{ asset('storage/' . $movie->poster) }}" width="50">
            @endif
            <input type="file" name="poster" class="form-control">
        </div>
        <div class="mb-3">
            <label>Download URL</label>
            <input type="url" name="download_url" class="form-control" value="{{ $movie->download_url }}" required>
        </div>
        <button type="submit" class="btn btn-success">Update Movie</button>
    </form>
@endsection