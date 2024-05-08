<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Gym</title>
<link rel="stylesheet" href="style.css">
@vite('resources/css/app.css')
</head>
<body class="bg-green-300">
<header>
    <div class="justify-center">
<a href="/dashboard" class="text-4xl font-semibold text-gray-900 dark:text-black  drop-shadow-2xl shadow-purple-500 bg-green-400 px-200"><p></p>The Best Gym Planner</a>
<div>
  @auth
    <div>
      <p class="text-2xl font-semibold text-gray-900 dark:text-black text-right">Welcome, {{ auth()->user()->name }}</p>
      <form action="/logout" method="POST">
        @csrf
        <x-primary-button class="ms-3 drop-shadow-2xl shadow-cyan-500 top: 0">
                {{ __('Log Out') }}
        </x-primary-button>
      </form>
    </div>
  @endauth
  @guest
      <div>
        <p class="text-1xl font-semibold text-gray-900 dark:text-black justify-items-end"><a href="/login">Log In</a></p>
        <p class="text-1xl font-semibold text-gray-900 dark:text-black justify-items-end"><a href="/register">Register</a></p>
      </div>
  @endguest
</header>
{{ $slot }}
</body>
</html>