<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Studenten KU Leuven</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">

</head>
<body>
<header>
    <h1>Zoek hier naar studenten in het Rijksarchief Leuven</h1>
    <h4>Databank van personen ingeschreven in de matrikels van de Oude Universiteit Leuven, 1426-1797</h4>
</header>
<div class="custom-container">
    @include('students.index', ['students' => $students])
</div>
</body>
</html>
