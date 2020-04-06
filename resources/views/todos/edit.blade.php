@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">Update Todo</div>

        <div class="card-body">
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach($errors->all() as $error)
                            <li class="list-group-item">{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('todos.update', [$todo->id]) }}" method="post">
                @csrf 
                <!-- Form Method Spoofing -->
                @method('PUT')
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name='title' value="{{ $todo->title }}">
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control">{{ $todo->content }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Update Todo</button>
                </div>                
            </form>
        </div>
    </div>

@endsection