<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Day Routine</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <h1>Create Day Routine</h1>
    <a href="/">Back</a>
    <form method="POST" action="/store">
        @csrf
        <label>
            Day:
            <input name="day" />
        </label>

        <label>
            Exercise:
            <input name="exercise" />
        </label>

        <label>
            Reps:
            <input name="reps" />
        </label>

        <label>
            Sets:
            <input name="sets" />
        </label>

        <label>
            Rest(min):
            <input name="rest" />
        </label>
        <button type="submit">Create</button>
    </form>
</body>
</html>