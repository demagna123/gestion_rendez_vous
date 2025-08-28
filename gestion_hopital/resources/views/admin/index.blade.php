@extends('layout.base')

@section('content')
    <h3>Pour gérer les médécins cliquez sur <a href="{{ route('doctors.index')}}">Liste des Médécins </a></h3>
    <h3>Pour gérer les patients cliquez sur <a href="{{ route('patients.index')}}">Liste des Patients </a></h3>
@endsection