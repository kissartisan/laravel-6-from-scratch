@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>New Article</h1>

        <form method="POST" action="/articles">
            @csrf
            <div>
                <label for="title">Title</label><input type="text" name="title" value="{{ old('title') }}">
                @error('title')
                    <p>{{ $errors->first('title') }}</p>
                @enderror
            </div>
            <div>
                <label for="excerpt">Excerpt</label><input type="text" name="excerpt" value="{{ old('excerpt') }}">
                @error('excerpt')
                    <p>{{ $errors->first('excerpt') }}</p>
                @enderror
            </div>
            <div>
                <label for="body">Body</label><input type="text" name="body" value="{{ old('body') }}">
                @error('body')
                    <p>{{ $errors->first('body') }}</p>
                @enderror
            </div>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
