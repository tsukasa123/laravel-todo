@extends('layouts.app')
@section('content')

    <div class="card">
        <div class="card-header">New Todo</div>

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
            <form action="{{ route('todos.store') }}" method="post">
                @csrf 
                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name='title'>
                </div>
                <div class="form-group">
                    <label for="">Content</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </div>                
            </form>
        </div>
    </div>

@endsection