<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

</head>

<body style="font-family: sans-serif;">

            @yield('header')
            @yield('content')

    <p>
        Best Wishes,
    </p>

    <p style="font-family: cursive; font-size: x-large;">
        Poppleton Dog Show
    </p>

</body>
</html>
