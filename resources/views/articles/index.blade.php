@extends('layout')

@section('content')
    <ul class="style1">
        @foreach($articles as $article)
        <li class="first">
            <h3><a href="articles/{{ $article->getKey() }}">{{ $article->title }}</a></h3>
            <p>{{ $article->excerpt }}</p>
        </li>
        @endforeach
    </ul>
@endsection
