
@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    @if(count($post) > 0)
        @foreach($posts as $post)
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    </div>
                </div>
            </div>
        @endforeach
        {{$post->links()}}
    @else
        <p>No posts found</p>
    @endif
@endsection
