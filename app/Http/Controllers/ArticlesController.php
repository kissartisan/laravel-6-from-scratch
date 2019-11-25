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

    public function show(Article $article)
    {
        // Show a single resource
        // $article = Article::find($articleId);

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        // Persist the new resource
        $article = new Article();

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        // $article = Article::find($id);
        // Show a view to edit an existing resource
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        // $article = Article::find($id);
        // Persist the edited resource

        $article->title = request('title');
        $article->excerpt = request('excerpt');
        $article->body = request('body');

        $article->save();
        return redirect('/articles/' . $article->getKey());
    }

    public function destroy()
    {

    }
}
