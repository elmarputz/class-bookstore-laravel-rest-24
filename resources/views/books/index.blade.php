<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body class="antialiased">
<h1>My Booklist</h1>
<ul>
    @foreach ($books as $book)
        <li>{{$book->id}} | {{$book->isbn}}<br />
            <h3><a href="/books/{{$book->id}}">{{ $book->title }}</a></h3></li>
    @endforeach
</ul>
</body>
</html>
