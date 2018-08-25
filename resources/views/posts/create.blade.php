@extends('layouts.app')
@section('content')
    <h3>
        Create a post
    </h3>
    {!! Form::open(['url' => 'foo/bar']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    {!! Form::close() !!}
@endsection