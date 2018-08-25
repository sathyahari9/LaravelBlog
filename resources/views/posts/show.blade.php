@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/">
        go back
    </a>
    <h3>{{$post->title}}</h3>
    <small>
        {{$post->created_at}}
    </small>
    <p>
        {{$post->body}}
    </p>
@endsection