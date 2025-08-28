@extends('layout.base')

@section('content')
    <div class="doctors">
        <h1>Détails du médécin</h1>
        
        <p><strong>Nom :</strong> {{ $doctor->name }}</p>
        <p><strong>Prénoms :</strong> {{ $doctor->surname }}</p>
        <p><strong>Contact :</strong> {{ $doctor->contact }}</p>
        <p><strong>Spécialité :</strong> {{ $doctor->spécialité}}</p>
        <p><strong>Disponibilité :</strong> {{ $doctor->disponibilité }}</p>

        
        <a href="{{ route('doctors.index') }}">⬅ Retour à la liste</a>
    </div>

    <style>
        .doctors { margin-left: 150px; margin-top: 50px; background: white;
            padding: 20px; border-radius: 6px; box-shadow: 0 0 8px rgba(0,0,0,0.05); width: 350px; }
        p { margin: 8px 0; }
        a { color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
@endsection
