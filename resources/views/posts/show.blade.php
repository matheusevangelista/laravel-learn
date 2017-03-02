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

    <hr>

    <div class="card">
        <div class="card-block">

            <form method="POST" action="/posts/{{ $post->id }}/comments">

                {{ csrf_field() }}


                <div class="form-group">

                    <textarea name="body" placeholder="Seu comentário" class="form-control"></textarea>

                </div>

                <div class="form-group">

                    <button type="submit" class="btn btn-primary">Adicionar Comentário</button>

                </div>
            </form>

            @include('layouts.errors')
        </div>
    </div>
@endsection