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
                            <td> 
                                <a href="{{route('categories.edit', $category->id)}}" class="btn btn-info btn-sm"> Edit </a> 
                                <button class="btn btn-danger btn-sm" onclick="handleDelete({{ $category->id}})">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>  {{-- end card --}}
    
    <form action="" method="POST" id="deleteCategoryForm">
        @csrf
        @method('DELETE')
        <!-- Modal -->
        <div class="modal fade" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <p class="text-center font-weight-bold">Are you sure to delete Category?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go Back</button>
                        <button type="submit" class="btn btn-danger">Yes, Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    
@endsection


@section('scripts')
    <script>
        function handleDelete(id){
            
            var form = document.getElementById('deleteCategoryForm');
            //form.action = '/categories/'+ id;
            form.action = "{{URL::to('categories/')}}"+"/"+ id;     //http://127.0.0.1:8001/categories + '/'+ id
            
            
            console.log('deleting', form);
            $('#deleteCategory').modal('show');
        }
    </script>
@endsection