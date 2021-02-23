<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class PageController extends Controller
{
    public function Home()
    {
        return view('pages.home');
    }
    public function Article()
    {
        return view('pages.article');
    }
    public function Category()
    {
        return view('pages.category');
    }
    public function articles_api()
    {
        return view('spa.articles');
    }
    public function categories_api()
    {
        return view('spa.categories');
    }
    public function tags_api()
    {
        return view('spa.tags');
    }

}
