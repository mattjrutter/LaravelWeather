@extends('layouts.app')

@section('content')
    @if(!Auth::guest())
        <div class="container">
            <a href="/posts/create" class="btn btn-primary pull-right">Create Post</a>
        </div>
    @else
        <div class="container">
            <p>Join the conversation by <a href="/login">logging in</a> or <a href="/register">registering!</a></p>
        </div>
    @endif
    <h1>Posts</h1>
    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="well">
                <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3><small> by {{$post->user->name}}</small>
                <p>{!!$post->body!!}</p>
                <small>Written on {{$post->created_at}}</small>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
