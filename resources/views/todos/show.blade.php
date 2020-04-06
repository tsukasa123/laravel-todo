@extends('layouts.app')
@section('content')

    <h1 class="text-center">Todo Details</h1>

    <div class="card">
        <div class="card-header">{{ $todo->title }}</div>
        <div class="card-body">

            <div>{{ $todo->content }}</div>
            <a href="{{ route('todos.edit', [$todo->id]) }}" class="btn btn-xs btn-primary"><i class="fas fa-edit"></i></a>
            <a href="{{ route('todos') }}" class="btn btn-xs btn-secondary float-right">Go Back</a>
       
        </div>
    </div>

@endsection