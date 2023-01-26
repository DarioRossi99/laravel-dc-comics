<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>

    <main>
        <ul>
            <li><a href="{{route("comics.create")}}">Create</a></li>
            <li><a href="{{route("comics.index")}}">Index</a></li>
            <li><a href="{{route("comics.show")}}">Show</a></li>
            <li><a href="{{route("comics.store")}}">Store</a></li>
        </ul>
    </main>

</body>

</html>