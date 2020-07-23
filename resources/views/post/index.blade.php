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
                <table class="table">
                    <thead>
                        <th>Image</th>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td> <img src="{{ asset('storage/'.$post->image) }}" width="120px" height="60px" alt=""> </td>
                                <td>{{$post->title}}</td>

                                <td> <a href="" class="btn btn-info btn-sm">Edit</a> </td>
                                <td> <a href="" class="btn btn-danger btn-sm">Delete</a> </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
    
@endsection