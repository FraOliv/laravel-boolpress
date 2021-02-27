<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use App\Tag;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index', compact('articles'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();

        return view('article.create', compact('categories','tags'));   
     }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateddata = $request->validate([ 

            'title' => 'required',
            'subtitle' => 'required',
            'author' => 'required',
            'body' => 'required',
            'reading_time' => 'required',
            'category_id' => 'required',
            'tags' => 'exists:tags,id',

        ]);
        dd($validateddata);

        Article::create($validateddata);
        $post = Article::orderBy('id', 'desc')->first();
        $post->tags()->attach($request->tags);


        return redirect()->route('article.index', $post);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {

        $tags = Tag::all();
        return view('article.edit', compact('article', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
       
        $validateddata = $request->validate([
            'title' => 'required',
            'subtitle' => 'required',
            'author' => 'required',
            'body' => 'required',
            'reading_time' => 'required',
            'tags' => 'exists:tags,id',
        ]);
        $article->update($validateddata);
        $article->tags()->sync($request->tags);

        return redirect()->route('article.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('article.index'); 
    }
}
