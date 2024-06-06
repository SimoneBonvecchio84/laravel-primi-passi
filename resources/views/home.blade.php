<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Classe 1</h1>

    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Classe 1</a></li>
            <li><a href="{{ route('about') }}">Classe 2</a></li>    
        </ul>
    </nav>

    <h2>{{ $greeting }} {{ $username }} </h2>

    <div>
        <h3>Studenti Classe 1</h3>
        <ul>
           
                @foreach ($students as $curStudent)
                <li> Ciao, {{ $curStudent }}  </li>   
                @endforeach
            
        </ul>
    </div>
</body>
</html>