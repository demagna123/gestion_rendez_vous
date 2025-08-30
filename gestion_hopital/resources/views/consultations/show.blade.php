@extends('layout.base')

@section('content')
    <div class="doctors">
        <h1>Détails de la consultation</h1>
        
        <p><strong>Date :</strong> {{ $consultation->date }}</p>
        <p><strong>Heure :</strong> {{ $consultation->heure }}</p>
        <p><strong>Note :</strong> {{ $consultation->note }}</p>
        
        
        <a href="{{ route('consultations.index') }}">⬅ Retour à la liste</a>
    </div>

    <style>
        .doctors { margin-left: 150px; margin-top: 50px; background: white;
            padding: 20px; border-radius: 6px; box-shadow: 0 0 8px rgba(0,0,0,0.05); width: 350px; }
        p { margin: 8px 0; }
        a { color: #007bff; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
@endsection
