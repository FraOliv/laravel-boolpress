<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Boolean Boolpress @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body>
 
        <nav class="navbar">
                    <a href="{{route('home')}}"> Home</a>
                    <a href="{{route('article.index')}}">Articles</a>
                    <a href="{{route('category.index')}}">Categories</a>
                    <a href="{{route('articles_api')}}">Articles API Laravel</a>
                 
                    
                    
               
        </nav>

        <main>
            @yield('main_content')
        </main>
         <link rel="stylesheet" href="{{asset('js/app.js')}}">
        
    </body>
</html>
