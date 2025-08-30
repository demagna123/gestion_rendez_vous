@extends('layout.base')

@section('content')
    <div class="doctors">
        <h1>Ajouter une consultation</h1>

        <a href="{{ route('consultations.index') }}">
            ⬅ Retour à la liste
        </a>

        <form action="{{ route('consultations.store') }}" method="POST">
            @csrf

            <label>Date :</label>
            <input type="date" name="date" required>

            <label>Heure :</label>
            <input type="time" name="heure" required>
            
            <label>Note :</label>
            <input type="text" name="note" required>

            <button type="submit">Enregistrer</button>
        </form>
    </div>

    <style>
        .doctors { margin-left: 150px; margin-top: 50px; }
        form {
            display: flex; flex-direction: column; width: 300px;
            background: white; padding: 20px; border-radius: 6px;
            box-shadow: 0 0 8px rgba(0,0,0,0.05);
        }
        label { margin-top: 10px; font-weight: bold; }
        /* input, {
            padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px;
        } */
        button {
            margin-top: 15px; background: #28a745; color: white;
            border: none; padding: 10px; cursor: pointer; border-radius: 4px;
        }
        button:hover { background: #218838; }
        a { display: inline-block; margin-bottom: 15px; color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
@endsection
