<?php

namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function index() {
        $posts = (object)[
            (object) [
                'id' => 134,
                'title' => 'Test title',
                'content' => 'Test body',
            ],
            (object) [
                'id' => 134,
                'title' => 'Test title',
                'content' => 'Test body',
            ],
            (object) [
                'id' => 134,
                'title' => 'Test title',
                'content' => 'Test body',
            ],
            (object) [
                'id' => 134,
                'title' => 'Test title',
                'content' => 'Test body',
            ],
        ];

        return view('blog.index', compact('posts'));
    }

    public function show($blog) {
        $blog = (object) [
            'id' => 134,
            'title' => 'Test title',
            'content' => 'Test body',
        ];

        return view('blog.show', compact('blog'));
    }
}
