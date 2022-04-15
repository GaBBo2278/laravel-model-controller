<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movies</title>
</head>
<body>
    
    @foreach ($movies as $movie)
        <ul>
            <li>{{$movie['title']}}</li>
            <li>{{$movie['original_title']}}</li>
            <li>{{$movie['nationality']}}</li>
            <li>{{$movie['date']}}</li>
            <li>{{$movie['vote']}}</li>
        </ul>
    @endforeach
</body>
</html>