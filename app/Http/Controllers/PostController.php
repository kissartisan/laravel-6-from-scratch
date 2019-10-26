<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($post)
    {
        $posts = [
            'post-1' => 'Reymark',
            'post-2' => 'Lady Morganne'
        ];

        if (! array_key_exists($post, $posts)) {
            abort(404, 'Sorry that post was not found');
        }

        return view('post', [
            'post' => $posts[$post]
        ]);
    }
}
