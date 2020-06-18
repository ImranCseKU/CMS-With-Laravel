@extends('layouts.app')

@section('content')
    {{-- class="col-md-8" --}}
    <div class="d-flex justify-content-end mb-2">
    <div><a href="{{ route('categories.create') }}" class="btn btn-success">Add Category</a></div>
    </div>
    <div class="card">
        <div class="card-header">Categories</div>
    </div>
    
@endsection