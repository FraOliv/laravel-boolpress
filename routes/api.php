<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('articleslist', function () {
    return response()->json([
        'data' => App\Article::all()
    ]);
});

Route::get('categorieslist', function () {
    return response()->json([
        'data' => App\Category::all()
    ]);
});
Route::get('tagslist', function () {
    return response()->json([
        'data' => App\Tag::all()
    ]);
});
