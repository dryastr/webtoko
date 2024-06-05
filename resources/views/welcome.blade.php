<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="container mx-auto mt-5">
        <h1 class="text-3xl font-bold text-center">Hello, Tailwind CSS!</h1>
    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
