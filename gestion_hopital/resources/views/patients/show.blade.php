@extends('layout.base')

@section('content')
    <div class="doctors">
        <h1>Détails du patient</h1>
        
        <p><strong>Nom :</strong> {{ $patient->name }}</p>
        <p><strong>Prénoms :</strong> {{ $patient->surname }}</p>
        <p><strong>Contact :</strong> {{ $patient->contact }}</p>
        
        
        <a href="{{ route('patients.index') }}">⬅ Retour à la liste</a>
    </div>

    <style>
        .doctors { margin-left: 150px; margin-top: 50px; background: white;
            padding: 20px; border-radius: 6px; box-shadow: 0 0 8px rgba(0,0,0,0.05); width: 350px; }
        p { margin: 8px 0; }
        a { color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
@endsection
