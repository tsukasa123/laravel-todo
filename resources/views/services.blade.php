@extends('layouts.app')

@section('content')
<div class="container">
        <div class="container">
            <h2 class="text-center">{{ $title }}</h2>
            <ul class="list-group">
                @foreach($services as $service)
                    <li class="list-group-item">{{$service}}</li>
                @endforeach
            </ul>
    </div>s
</div>
@endsection
