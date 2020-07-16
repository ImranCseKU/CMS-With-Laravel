@extends('layouts.app')

@section('content')

{{-- class="col-md-8" --}}
@if ( session()->has('message'))
    <div class="alert alert-success"> {{ session('message') }} </div>
@endif

<div class="card">
    <div class="card-header">Create Post</div>
    <div class="card-body">
        <form action="">
            @csrf 

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="discription">Discription</label>
                <textarea name="discription" class="form-control" id="discription" cols="30" rows="5">Discription</textarea>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea name="Content" class="form-control" id="Content" cols="30" rows="5">Discription</textarea>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="published_at">published At</label>
                <input type="text" name="published_at" id="published_at" class="form-control">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success">Submit</button>
            </div>

        </form>
    </div>
</div>
    
@endsection