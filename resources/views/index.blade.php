<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gym</title>
        <link href="style.css" rel="stylesheet" />
    </head>

    <body>
        <h1 class="title">Gym Planner</h1>

        <h2><nav><a href="/create">Create Plan</a></nav></h2>

        <ul>
    @foreach ($planners as $planner)
        <li><a href="show/{{ $planner->id }}" >{{ $planner->day }}<a/></li>
    @endforeach
    </ul>
    </body>
    
</html>
