@extends('layouts.app')

@section('content')
    {{-- class="col-md-8" --}}
    @if ( session()->has('message'))
        <div class="alert alert-success"> {{ session('message') }} </div>
    @endif
    
    <div class="d-flex justify-content-end mb-2">
    <div><a href="{{ route('categories.create') }}" class="btn btn-success">Add Category</a></div>
    </div>
    <div class="card">
        <div class="card-header">Categories</div>
        <div class="card-body">
            <table class="table table-striped table-dark">
                <thead>
                    <th>S/N</th>
                    <th>Name</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td> {{ $loop->index + 1 }} </td>
                            <td> {{ $category->name }} </td>
                            <td> <a href="{{route('categories.edit', $category->id)}}" class="btn btn-info btn-sm"> Edit </a> </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    
@endsection