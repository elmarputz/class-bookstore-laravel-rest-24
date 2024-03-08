<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

    </head>
    <body class="antialiased">
       <h1>Hello World</h1>
        <ul>
            @foreach ($books as $book)
                <li>{{$book->id}} | {{$book->isbn}}<br />{{ $book->title }}</li>
            @endforeach
        </ul>
    </body>
</html>
