@extends('layouts.admin')
@section('content')
<h2 class="text-danger mb-4">Add New Movie</h2>
<form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label>Title</label>
        <input type="text" name="title" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Description</label>
        <input type ="text" name="Description" class="form-control" rows="3" required></input>
    </div>
    <div class="mb-3">
        <label>Category</label>
        <input type="text" name="category" class="form-control" required>
    </div>

    <div class="mb-3">
        <label>Download Link</label>
        <input type="text" name="download_url" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Poster</label>
        <input type="file" name="poster" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-danger">Add Movie</button>
</form>
@endsection
