@extends('layout')

@section('content')
    @forelse($articles as $article)
        <div id="wrapper">
            <div id="page" class="container">
                <div id="content">
                    <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
                    <div class="title">
                        <h2><a href="{{ route('articles.show', $article) }}">{{ $article->title }}</a></h2>
                    </div>
                    {{ $article->body }}
                </div>
            </div>
        </div>
    @empty
        <p>No relevant articles yet.</p>
    @endforeach
@endsection
