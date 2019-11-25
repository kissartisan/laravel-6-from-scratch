@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>New Article</h1>

        <form method="POST" action="/articles">
            @csrf
            <label for="title">Title</label><input type="text" name="title"> <br>
            <label for="excerpt">Excerpt</label><input type="text" name="excerpt"> <br>
            <label for="body">Body</label><input type="text" name="body"> <br>
            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection
