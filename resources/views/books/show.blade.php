<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

</head>
<body class="antialiased">
<h1>{{ $book->title }}</h1>
<p>{{ $book->subtitle }}</p>
<p>{{ $book->isbn }}</p>

<hr />
<a href="/books">Back to list</a>
</body>
</html>
