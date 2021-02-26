<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = Post::all();
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //passare alla view con compact le variabili che contengono tutti i dati
        $categories = Category::all();
        $tags = Tag::all();
        return view('posts.create', compact('tags', 'categories'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validazione
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required' ,
            'tags' => 'exists:tags, id' //verifica se esiste lo specifico id nella tabella tag
        ]);

        Post::create($validatedData);

        $new_post = Post::orderBy('id', 'desc')->first();
        $new_post->tags()->attach($request->tags);

        //redirect
        return redirect()->route('posts.show', $new_post);
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //validazione
        $validatedData = $request->validate([
            'title' => 'required',
            'body' => 'required' 
         ]);
 
         $post->update($validatedData);
         return redirect()->route('posts.index');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
