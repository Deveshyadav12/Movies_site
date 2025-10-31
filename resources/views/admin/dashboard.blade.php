@extends('layouts.admin')

@section('content')
<h2 class="text-danger mb-4">Admin Dashboard</h2>
<a href="{{ route('admin.movies') }}" class="btn btn-success mb-3">Manage Movies</a>
@endsection
