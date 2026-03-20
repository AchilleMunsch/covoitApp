@extends('layouts.app')

@section('title', 'Liste des employés')

@section('content')

    <h1>Liste des employés</h1>

    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Action</th>
        </tr>

        @foreach($employes as $employe)
        <tr>
            <td>{{ $employe->nom }}</td>
            <td>
                <a href="{{ route('employes.show', $employe->id) }}">Voir</a>
            </td>
        </tr>
        @endforeach

    </table>

@endsection