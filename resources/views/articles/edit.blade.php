@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>Update Article</h1>

        <form method="POST" action="/articles/{{ $article->getKey() }}">
            @csrf
            @method('PUT')

            <label for="title">Title</label><input type="text" name="title" value="{{ $article->title }}"> <br>
            <label for="excerpt">Excerpt</label><input type="text" name="excerpt" value="{{ $article->excerpt }}"> <br>
            <label for="body">Body</label><input type="text" name="body" value="{{ $article->body }}"> <br>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
