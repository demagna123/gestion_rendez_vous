@extends('layout.base')

@section('content')
    <div class="médécins">
        <h1>Liste des patients</h1>

        <a href="{{ route('patients.create') }}">
            Ajouter un patient
        </a>
    </div>

    @if ($message = Session::get('success'))
        <p class="success">
            {{ $message }}
        </p>
    @endif

    <table>
        <thead>
            <tr>
                <th></th>
                <th>Nom</th>
                <th>Prénoms</th>
                <th>Contact</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patients as $patient)
                <tr>

                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->surname }}</td>
                    <td>{{ $patient->contact }}</td>
                    <td>
                        <a href="{{ route('patients.show', $patient->id) }}">Détails</a> |
                        <a href="{{ route('patients.edit', $patient->id) }}">Modifier</a> |
                        <form action="{{ route('patients.destroy', $patient->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Supprimer ce patient ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <style>
        h1 {
            color: #2c3e50;
            margin-bottom: 20px;
        }

        .médécins {
            margin-left: 150px;
            margin-top: 50px;
        }

        .médécins a {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        .médécins a:hover {
            background-color: #218838;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
            padding: 10px;
            border-left: 5px solid #28a745;
            margin: 15px 0;
            border-radius: 3px;
        }

        table {
            width: 90%;
            margin-left: 150px;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 8px rgba(0,0,0,0.05);
        }

        thead {
            background-color: #007bff;
            color: white;
        }

        th, td {
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
        }

        tr:hover {
            background-color: #f8f9fa;
        }

        a {
            color: #007bff;
            text-decoration: none;
            margin-right: 8px;
        }

        a:hover {
            text-decoration: underline;
        }

        form button {
            background-color: #dc3545;
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 3px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #c82333;
        }
    </style>
@endsection
