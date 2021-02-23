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
    public function articles_api()
    {
        return view('spa.articles');
    }

}
