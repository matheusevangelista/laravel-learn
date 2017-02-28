@extends('layouts.master')

@section('content')

    <h1> Create new post</h1>

    <hr/>

    <form method="POST" action="/posts">

        {{ csrf_field() }}

      <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" id="title" placeholder="" name="title">
      </div>

      <div class="form-group">
        <label for="body">Body</label>
        <textarea id="body" class="form-control" name="body"></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>

      @include('layouts.errors')
    </form>
@endsection