<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $planner->day }}</title> 
    @vite('resources/css/app.css')
</head>
<link href="style.css" rel="stylesheet" />


<body>
    <h1>{{ $planner->day }}</h1>

    <p>Exercises: {{ $planner->exercise }}</p>
    <p>Goal Rep Count for Each Exercise: {{ $planner->reps }}</p>
    <p>Sets for Each Exercise: {{ $planner->sets }}</p>
    <p>Rest Period Between Sets: {{ $planner->rest }}</p>
    <a href="/">Back</a>
</body>
</html>

