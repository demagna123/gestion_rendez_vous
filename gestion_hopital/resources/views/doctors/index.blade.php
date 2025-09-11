@extends('layout.base1')

@section('content1')
    @auth
        @if(auth()->user()->role === 'admin')

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
                        <th>Patient</th>
                        <th>Consultation</th>
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
                        <td>{{ $doctor->patient? $doctor->patient->name : 'Aucun patient.' }}</td>
                        <td>{{ $doctor->consultation? $doctor->consultation->note : 'Aucun consultation.' }}</td>
                        
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
        @endif
    @endauth
    
    <h3>Pour gérer les patients cliquez sur <a href="{{ route('base2')}}">Liste des Patients </a></h3>
    
@endsection
