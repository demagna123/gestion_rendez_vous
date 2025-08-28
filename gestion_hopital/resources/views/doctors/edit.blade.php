@extends('layout.base')

@section('content')
    <div class="doctors">
        <h1>Ajouter un médécin</h1>

        <a href="{{ route('doctors.index') }}">
            ⬅ Retour à la liste
        </a>

        <form action="{{ route('doctors.update',$doctor->id) }}" method="POST">
            @csrf
            
            @method('PUT')

            <label>Nom :</label>
            <input type="name" name="name" required>

            <label>Prénoms :</label>
            <input type="surname" name="surname" required>
            
            <label>Contact :</label>
            <input type="text" name="contact" required>
            
            <label>Spécialité :</label>
            <input type="text" name="spécialité" required>

            <label>Disponibilité :</label>
            <input type="date" name="disponibilité" required>

            <button type="submit">Modifier</button>
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
