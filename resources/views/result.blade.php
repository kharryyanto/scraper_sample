<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Web Scraper</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/results.css') }}" >
        <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" rel="stylesheet"  type='text/css'>
    </head>
    <body>
        <div class="wrap">
            <div class="result">
                <img src="<?php echo $screenshot; ?>" />
                <a href=" {{ $url }} ">
                    <h2>{{ $page_title }}</h2>
                </a>
                <p> {{ $meta_description }} </p>
                <p> Retrieved at: {{ $cur_time }} </p>

                <a href=" {{route('detail', ['url' => $url])}}"> Details...</a>
            </div>
        </div>
    </body>
</html>

