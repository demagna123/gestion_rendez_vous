@extends('layout.base1')

@section('content1')
    <h3>Pour gérer les médécins cliquez sur <a href="{{ route('doctors.index')}}">Liste des Médécins </a></h3>
    <h3>Pour gérer les patients cliquez sur <a href="{{ route('patients.index')}}">Liste des Patients </a></h3>
    <h3>Pour gérer les consultations cliquez sur <a href="{{ route('consultations.index')}}">Liste des Consultations </a></h3> 
    <style>
        h3 {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: #333;
        }

        a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
            color: #0056b3;
        }
    </style>
@endsection