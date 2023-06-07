    @extends('todo.layouts.main')
    @push('title')
        <title>Todo List</title>
    @endpush
    @section('main-container')
        <div class="container">
            <h1 class="text-center my-5">Todos Page</h1>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card card-header">
                            <p class="mb-0">Todos <a class="float-right" href="{{route('todo.add')}}"><span class="btn btn-primary btn-sm">Add</span></a></p>
                        </div>
                        <div class="card card-body">
                            <ul class='list-group'>
                                @foreach ($todos as $todo)
                                    <li class="list-group-item">{{$todo->name}}
                                    <a href="{{ route('todo.show',['todo'=>$todo->id]) }}"><span class="btn btn-sm btn-primary float-right">View</span></a>
                                    </li>        
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    @endsection    
    
