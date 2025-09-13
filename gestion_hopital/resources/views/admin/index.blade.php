@extends('layout.base1')

@section('content1')
    <h3><a href="{{ route('doctors.index')}}">Gérer les Médécins </a></h3>
    <h3><a href="{{ route('patients.index')}}">Gérer les Patients </a></h3>
    <h3><a href="{{ route('consultations.index')}}">Gérer les Consultations </a></h3> 
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