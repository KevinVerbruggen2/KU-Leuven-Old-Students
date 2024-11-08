<!-- resources/views/students/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
    </style>
</head>
<body>
<h1>First 50 Students</h1>
<table>
    <thead>
    <tr>
        <th>Naam</th>
        <th>Herkomst</th>
        <th>Inschrijving</th>
        <th>Category</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($students as $student)
    <tr>
        <!-- Naam: Voornaam + Naam -->
        <td>{{ $student->Voornaam }} {{ $student->Naam }}</td>

        <!-- Herkomst: Herkomst - modern -->
        <td>{{ $student->Herkomst_modern }}</td>

        <!-- Inschrijving: Datum inschrijving -->
        <td>{{ $student->Datum_inschrijving }}</td>

        <!-- Category: Cat inschrijving -->
        <td>{{ $student->Cat_inschrijving }}</td>
    </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

