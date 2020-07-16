@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-end mb-2">
        <a class="btn btn-success" href="">Add Post</a>
    </div>
   
    <div class="card">
        <div class="card-header">Post List</div>

        <div class="card-body">
            <table class="table table-stripe table-dark">
                <thead>
                    <tr>
                        <th>S/N</th>
                        <th>Post Title</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Hello</td>
                        <td>Hello world</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection