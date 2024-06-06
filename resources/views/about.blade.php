<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Classe 2</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Classe1</a></li>
            <li><a href="{{ route('about') }}">Classe2</a></li>
        </ul>
    </nav>

    <h2> {{ $greeting }} {{ $username }}</h2>

    <h3>Studenti</h3>

    <ul>
        @foreach ($students as $curStudent)
            <li>
                {{ $curStudent }}
            </li>
        @endforeach
    </ul>
</body>
</html>