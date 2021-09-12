<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Web Scraper</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/search.css') }}" >
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    </head>
    <body>
        <div class="wrap">
            <div class="search">
                <form action="{{ route('search') }}" method="GET">
                    <input type="text" class="searchTerm" placeholder="What are you looking for?" name="url">
                    <button type="submit" class="searchButton">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
    </body>
</html>
