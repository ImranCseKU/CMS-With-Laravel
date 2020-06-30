@extends('layouts.app')

@section('content')
    {{-- class="col-md-8" --}}
    @if ( session()->has('message'))
        <div class="alert alert-success"> {{ session('message') }} </div>
    @endif
    
    <div class="card">
        <div class="card-header">
            {{ isset($category)? 'Edit Category': 'Create Category' }}
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ isset($category)? route('categories.update', $category->id) :route('categories.store') }}" method="POST">
            @csrf
            @if ( isset($category))
                @method('PUT')   
            @endif

                <div class="form-group">
                    <label for="cat-name">Name</label>
                <input type="text" id="cat-name" name="name" class="form-control" value="{{ isset($category)? $category->name : ''}}" placeholder="category name">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success"> {{isset($category)? 'Update' :'Create'}} </button>
                </div>

            </form>
        </div>
    </div>
@endsection