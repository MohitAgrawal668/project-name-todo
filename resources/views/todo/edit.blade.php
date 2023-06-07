@extends('todo.layouts.main')
@push('title')
    <title>Edit Todo</title>
@endpush
@section('main-container')
    <div class="container">
        <h1 class="text-center my-5">Update Todo</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card card-header">
                        Todo Upadate
                    </div>
                    <div class="card card-body">
                        <form action="{{route('todo.update',['id' => $todo->id])}}" method="post">
                            @csrf
                            <div class="form-group">
                              <label for="">Name</label>
                              <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" value="{{ $todo->name }}">
                              <small id="helpId" class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                              </small>
                            </div>

                            <div class="form-group">
                                <label for="">Description</label>
                                <textarea name="description" id="description" class="form-control">{{ $todo->description }}</textarea>
                                <small id="helpId" class="text-danger">
                                    @error('description')
                                        {{ $message }}
                                    @enderror
                                </small>
                            </div>

                            <button type="submit" class="btn btn-success">Update Todo</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>    
@endsection    

