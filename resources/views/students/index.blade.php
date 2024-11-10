<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <link rel="stylesheet" href="{{ asset('css/student-styles.css') }}">
    <script src="{{ asset('js/student-scripts.js') }}"></script>
</head>
<body>
<div class="container">

    <form method="GET" action="{{ route('students.index') }}" class="search-form">
        <input type="text" name="voornaam" placeholder="Voornaam" value="{{ request('voornaam') }}">
        <input type="text" name="naam" placeholder="Naam" value="{{ request('naam') }}">
        <input type="text" name="herkomst" placeholder="Herkomst" value="{{ request('herkomst') }}">
        <input type="date" name="inschrijving" placeholder="Inschrijving" value="{{ request('inschrijving') }}">

        <select name="studiegebied">
            <option class="default-value" value="">Studiegebied</option>
            <option value="Philosophia" {{ request('studiegebied') == 'Philosophia' ? 'selected' : '' }}>Philosophia</option>
            <option value="Humaniora" {{ request('studiegebied') == 'Humaniora' ? 'selected' : '' }}>Humaniora</option>
            <option value="Ius utrumque" {{ request('studiegebied') == 'Ius utrumque' ? 'selected' : '' }}>Ius utrumque</option>
            <option value="Medicina" {{ request('studiegebied') == 'Medicina' ? 'selected' : '' }}>Medicina</option>
            <option value="Philosophia - Logica" {{ request('studiegebied') == 'Philosophia - Logica' ? 'selected' : '' }}>Philosophia - Logica</option>
            <option value="Physica" {{ request('studiegebied') == 'Physica' ? 'selected' : '' }}>Physica</option>
            <option value="Humaniora - Rhetorica" {{ request('studiegebied') == 'Humaniora - Rhetorica' ? 'selected' : '' }}>Humaniora - Rhetorica</option>
            <option value="Theologia" {{ request('studiegebied') == 'Theologia' ? 'selected' : '' }}>Theologia</option>
            <option value="Ius" {{ request('studiegebied') == 'Ius' ? 'selected' : '' }}>Ius</option>
            <option value="Humaniora - Grammatica" {{ request('studiegebied') == 'Humaniora - Grammatica' ? 'selected' : '' }}>Humaniora - Grammatica</option>
            <option value="Ius Canonicus" {{ request('studiegebied') == 'Ius Canonicus' ? 'selected' : '' }}>Ius Canonicus</option>
            <option value="Humaniora - Poesis" {{ request('studiegebied') == 'Humaniora - Poesis' ? 'selected' : '' }}>Humaniora - Poesis</option>
            <option value="Humaniora - Syntaxis" {{ request('studiegebied') == 'Humaniora - Syntaxis' ? 'selected' : '' }}>Humaniora - Syntaxis</option>
            <option value="Artes" {{ request('studiegebied') == 'Artes' ? 'selected' : '' }}>Artes</option>
            <option value="Ius Civilis" {{ request('studiegebied') == 'Ius Civilis' ? 'selected' : '' }}>Ius Civilis</option>
            <option value="Ius Canonicus - Decreta" {{ request('studiegebied') == 'Ius Canonicus - Decreta' ? 'selected' : '' }}>Ius Canonicus - Decreta</option>
            <option value="Artes; Theologia" {{ request('studiegebied') == 'Artes; Theologia' ? 'selected' : '' }}>Artes; Theologia</option>
            <option value="Artes; Medicina" {{ request('studiegebied') == 'Artes; Medicina' ? 'selected' : '' }}>Artes; Medicina</option>
        </select>

        <select name="cat_inschrijving">
            <option class="default-value" value="">Category inschrijving</option>
            <option value="nobilis" {{ request('cat_inschrijving') == 'nobilis' ? 'selected' : '' }}>nobilis</option>
            <option value="pauper" {{ request('cat_inschrijving') == 'pauper' ? 'selected' : '' }}>pauper</option>
            <option value="beneficiatus" {{ request('cat_inschrijving') == 'beneficiatus' ? 'selected' : '' }}>beneficiatus</option>
            <option value="dives" {{ request('cat_inschrijving') == 'dives' ? 'selected' : '' }}>dives</option>
            <option value="nobilis; dives" {{ request('cat_inschrijving') == 'nobilis; dives' ? 'selected' : '' }}>nobilis; dives</option>
        </select>

        <select name="cat_leeftijd">
            <option class="default-value" value="">Cat Leeftijd</option>
            <option value="maiorennis" {{ request('cat_leeftijd') == 'maiorennis' ? 'selected' : '' }}>maiorennis</option>
            <option value="minorennis" {{ request('cat_leeftijd') == 'minorennis' ? 'selected' : '' }}>minorennis</option>
        </select>

        <select name="pedagogie">
            <option class="default-value" value="">Pedagogie</option>
            <option value="liliensis; castrensis" {{ request('pedagogie') == 'liliensis; castrensis' ? 'selected' : '' }}>liliensis; castrensis</option>
            <option value="porcensis; falconensis" {{ request('pedagogie') == 'porcensis; falconensis' ? 'selected' : '' }}>porcensis; falconensis</option>
            <option value="castrensis" {{ request('pedagogie') == 'castrensis' ? 'selected' : '' }}>castrensis</option>
            <option value="liliensis" {{ request('pedagogie') == 'liliensis' ? 'selected' : '' }}>liliensis</option>
            <option value="porcensis" {{ request('pedagogie') == 'porcensis' ? 'selected' : '' }}>porcensis</option>
            <option value="falconensis" {{ request('pedagogie') == 'falconensis' ? 'selected' : '' }}>falconensis</option>
        </select>

        <select name="school_selectie">
            <option class="default-value" value="">School Selectie</option>
            <option value="Humaniora - Collegium Sanctissimae Trinitatis" {{ request('school_selectie') == 'Humaniora - Collegium Sanctissimae Trinitatis' ? 'selected' : '' }}>Humaniora - Collegium Sanctissimae Trinitatis</option>
            <option value="Humaniora - Collegium Augustinianorum" {{ request('school_selectie') == 'Humaniora - Collegium Augustinianorum' ? 'selected' : '' }}>Humaniora - Collegium Augustinianorum</option>
            <option value="Humaniora - Schola Sancti Petri" {{ request('school_selectie') == 'Humaniora - Schola Sancti Petri' ? 'selected' : '' }}>Humaniora - Schola Sancti Petri</option>
            <option value="Humaniora - Collegium Gandense" {{ request('school_selectie') == 'Humaniora - Collegium Gandense' ? 'selected' : '' }}>Humaniora - Collegium Gandense</option>
            <option value="Humaniora - Collegium Vaulxianum" {{ request('school_selectie') == 'Humaniora - Collegium Vaulxianum' ? 'selected' : '' }}>Humaniora - Collegium Vaulxianum</option>
            <option value="Humaniora - Collegium Standonck" {{ request('school_selectie') == 'Humaniora - Collegium Standonck' ? 'selected' : '' }}>Humaniora - Collegium Standonck</option>
        </select>

        <div>
            <button type="reset" class="reset-button">Reset Filters</button>
            <button type="submit">Zoeken</button>
        </div>
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

            <tr class="student-row" data-student-id="{{ $student->ID }}">
                <td>{{ $student->Voornaam }} {{ $student->Naam }}</td>
                <td>{{ $student->{'Herkomst - modern'} }}</td>
                <td>{{ $student->{'Datum inschrijving'} }}</td>
            </tr>

            <tr class="student-details-row" id="details-{{ $student->ID }}" style="display: none;">
                <td colspan="3">
                    <div class="student-details">

                        @if(!empty($student->Studiegebied))
                            <p><strong>Studiegebied:</strong> {{ $student->Studiegebied }}</p>
                        @endif

                        @if(!empty($student->{'Cat inschrijving'}))
                            <p><strong>Cat inschrijving:</strong> {{ $student->{'Cat inschrijving'} }}</p>
                        @endif

                        @if(!empty($student->Pedagogie))
                            <p><strong>Pedagogie:</strong> {{ $student->Pedagogie }}</p>
                        @endif

                        @if(!empty($student->{'School (humaniora)'}))
                            <p><strong>School Selectie:</strong> {{ $student->{'School (humaniora)'} }}</p>
                        @endif

                        @if(!empty($student->Herkomst))
                            <p><strong>Herkomst (oud):</strong> {{ $student->Herkomst }}</p>
                        @endif

                        @if(!empty($student->{'Cat leeftijd'}))
                            <p><strong>Cat Leeftijd:</strong> {{ $student->{'Cat leeftijd'} }}</p>
                        @endif

                        @if(!empty($student->{'Folio (mss)'}))
                            <p><strong>Folio (mss):</strong> {{ $student->{'Folio (mss)'} }}</p>
                        @endif

                        @if(!empty($student->Bisdom))
                            <p><strong>Bisdom:</strong> {{ $student->Bisdom }}</p>
                        @endif

                        @if(!empty($student->{'Vol. (ed.)'}))
                            <p><strong>Vol. (ed.):</strong> {{ $student->{'Vol. (ed.)'} }}</p>
                        @endif

                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
