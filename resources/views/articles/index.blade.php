@extends('layout')

@section('content')
    @foreach($articles as $article)
        <div id="wrapper">
            <div id="page" class="container">
                <div id="content">
                    <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                    <div class="title">
                        <h2><a href="articles/{{ $article->getKey() }}">{{ $article->title }}</a></h2>
                    </div>
                    {{ $article->body }}
                </div>
            </div>
        </div>
    @endforeach
@endsection
