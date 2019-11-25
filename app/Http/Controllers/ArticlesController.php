<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        // Render a list of resources
        $articles = Article::get();

        return view('articles.index', compact('articles'));
    }

    public function show($articleId)
    {
        // Show a single resource
        $article = Article::find($articleId);

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        // Persist the new resource
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }

    public function edit()
    {
        // Show a view to edit an existing resource
    }

    public function update()
    {
        // Persist the edited resource
    }

    public function destroy()
    {

    }
}
