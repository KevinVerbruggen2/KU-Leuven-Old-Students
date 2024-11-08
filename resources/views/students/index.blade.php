<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <!-- Link to the external CSS file -->
    <link rel="stylesheet" href="{{ asset('css/student-styles.css') }}">
</head>
<body>
<div class="container">
    <h1>Zoek hier naar studenten</h1>

    <form method="GET" action="{{ route('students.index') }}" class="search-form">
        <input type="text" name="voornaam" placeholder="Voornaam" value="{{ request('voornaam') }}">
        <input type="text" name="naam" placeholder="Naam" value="{{ request('naam') }}">
        <input type="text" name="herkomst" placeholder="Herkomst" value="{{ request('herkomst') }}">

        <!-- Single Date for Inschrijving (Registration Date) -->
        <input type="date" name="inschrijving" placeholder="Inschrijving" value="{{ request('inschrijving') }}">

        <button type="submit">Zoeken</button>
    </form>

    <table>
        <thead>
        <tr>
            <th>Naam</th>
            <th>Herkomst</th>
            <th>Inschrijving</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($students as $student)
        <tr>
            <td data-label="Naam">{{ $student->Voornaam }} {{ $student->Naam }}</td>
            <td data-label="Herkomst">{{ $student->getModernHerkomstAttribute() }}</td>
            <td data-label="Inschrijving">{{ $student->getInschrijvingDateAttribute() }}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
