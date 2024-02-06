@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>My projects</h1>
    <ul>
        @foreach ($projects as $project)
            <li>
                <h2> {{$project['title']}}</h2>
                <p>{{$project['description']}}</p>
            </li>
        @endforeach
    </ul>
</div>
@endsection