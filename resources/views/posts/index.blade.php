@extends('layouts.app')

@section('content')
    <h3>Posts</h3>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class="well">
            <a href="posts/{{$post->id}}">
                <h3>
                        {{$post->title}}
                </h3>
            </a>
                <p>
                    <small>
                        {{$post->created_at}}
                    </small>
                </p>
            </div>
        @endforeach
        {{
            $posts->links()
        }}
    @else 
            "no posts found"
    @endif
@endsection