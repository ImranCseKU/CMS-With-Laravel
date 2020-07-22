@extends('layouts.app')

@section('content')
{{-- class="col-md-8" --}}
    @if ( session()->has('message'))
        <div class="alert alert-success"> {{ session('message') }} </div>
    @endif
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