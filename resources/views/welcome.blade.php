<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studenten KU Leuven</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
    <style>
        /* Base styles for main page */
        body {
            font-family: 'Figtree', sans-serif;
            background-color: #f3f4f6;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            overflow-x: hidden;
        }
        h1 {
            text-align: center;
            color: #2d3748;
            margin: 0.5em 0;
            font-size: 2rem;
            font-weight: 600;
        }
    </style>
    @endif
</head>
<body>
<div class="container">
    @include('students.index', ['students' => $students])
</div>
</body>
</html>
