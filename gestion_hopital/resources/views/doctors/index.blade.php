@extends('layout.base')

@section('content')
    <div class="médécins">
        <h1>Liste des Médécins</h1>

        <a href="{{ route('doctors.create') }}">
            Ajouter un médécin
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
                <th>Nom</th>
                <th>Prénoms</th>
                <th>Contact</th>
                <th>Spécialité</th>
                <th>Disponibilité</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($doctors as $doctor)
                <tr>

                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->surname }}</td>
                    <td>{{ $doctor->contact }}</td>
                    <td>{{ $doctor->spécialité }}</td>
                    <td>{{ $doctor->disponibilité }}</td>
                    <td>
                        <a href="{{ route('doctors.show', $doctor->id) }}">Détails</a> |
                        <a href="{{ route('doctors.edit', $doctor->id) }}">Modifier</a> |
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Supprimer ce médecin ?')">
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
