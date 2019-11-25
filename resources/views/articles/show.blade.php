@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
            <div class="title">
                <h2>{{ $article->title }}</h2>
            </div>
            {{ $article->body }}
        </div>
    </div>
</div>
@endsection
