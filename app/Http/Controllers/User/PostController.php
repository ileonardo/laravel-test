<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = (object)[
            (object) [
                'id' => 134,
                'title' => 'Test title2',
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

        return view('user.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = validator($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string'],
            'published' => ['nullable', 'boolean'],
            'published_at' => ['nullable', 'date'],
        ])->validate();


        Post::create([
            'user_id' => User::query()->value('id'),
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
            'published' => $validatedData['published'] ?? false,
            'published_at' => new Carbon($validatedData['published_at'] ?? null),
        ]);

        return redirect()->route('user.posts');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $post)
    {
        return "Show $post";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete(string $id)
    {
        //
    }
}
