@extends('layouts.app')

@section('content')
    {{-- class="col-md-8" --}}
    <div class="card">
        <div class="card-header">Create Category</div>
        <div class="card-body">
            <form action="">
                <div class="form-group">
                    <label for="cat-name">Name</label>
                    <input type="text" id="cat-name" class="form-control" placeholder="category name">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection