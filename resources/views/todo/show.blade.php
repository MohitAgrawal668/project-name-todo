@extends('todo.layouts.main')
@push('title')
    <title>{{ $todo->name }}</title>
@endpush
@section('main-container')
    <div class="container">
        <h1 class="text-center my-5">{{ $todo->name }}</h1>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card card-header">Details</div>
                    <div class="card card-body">
                        {{ $todo->description }}
                    </div>
                </div>
                <a href="{{ route('todo.edit', ['id' => $todo->id]) }}"><button class="btn btn-primary btn-sm my-2">Edit Todo</button></a>
                <a href="{{ route('todo.delete', ['id' => $todo->id]) }}"><button class="btn btn-danger btn-sm my-2">Delete</button></a>
                @if($todo->completed == false)
                    <a href="{{ route('todo.complete', ['id' => $todo->id]) }}"><button class="btn btn-success btn-sm my-2">Complete Todo</button></a>
                @endif    
            </div>
        </div>
    </div>
@endsection
