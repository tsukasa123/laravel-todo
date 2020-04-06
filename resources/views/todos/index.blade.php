@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Todos</div>

        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <th>Title</th>
                    <th colspan="3" class="text-center">Action</th>
                </thead>
                <tbody>
                    @foreach($todos as $todo)
                    <tr>
                        <td>{{ $todo->title }}</td>
                        <td><a href="{{ route('todos.show', [$todo->id])}}"><i class="fas fa-eye"></i></a></td>
                        <td><a href="{{ route('todos.delete', [$todo->id]) }}"><i class="fas fa-trash-alt" aria-hidden="true"></i></a></td>
                  
                        @if($todo->finish)
                            <td><a href="#" class="btn btn-xs btn-success"><i class="fas fa-check-circle"></i></a></td>
                        @else
                            <td><a href="{{ route('todo.done', [$todo->id]) }}" class="btn btn-danger"><i class="fas btn-xs fa-times-circle"></i></a></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection