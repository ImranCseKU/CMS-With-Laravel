@extends('layouts.app')

@section('content')

    <div class="d-flex justify-content-end mb-2">
        <div>
            <a href="{{ route('posts.create') }}" class="btn btn-success">Add Post</a></div>
        </div>
        <div class="card">
            <div class="card-header">Post</div>
            <div class="card-body">
                
            </div>
        </div>
    </div>
    
@endsection