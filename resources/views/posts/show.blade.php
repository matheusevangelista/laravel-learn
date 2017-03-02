@extends('layouts.master')

@section('content')

  @include('posts.post')

  <hr/>

  <div class="comments">
    @foreach($post->comments as $comment)
        <article>
            <strong>{{ $comment->created_at->diffForHumans() }}</strong>
            {{ $comment->body }}
        </article>
    @endforeach
  </div>

@endsection