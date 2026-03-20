@extends('layouts.app')

@section('title', 'Profil de ' . $employe->nom)

@section('content')

    <h1>Profil de {{ $employe->nom }}</h1>

    <h2>Véhicules</h2>

    <table border="1">
        <tr>
            <th>Modèle</th>
            <th>Action</th>
        </tr>

        @foreach($employe->vehicules as $vehicule)
        <tr>
            <td>{{ $vehicule->modele }}</td>
            <td>
                <a href="{{ route('vehicules.show', $vehicule->id) }}">Voir</a>
            </td>
        </tr>
        @endforeach

    </table>

    <h2>Vérifier un modèle</h2>

    <form method="POST" action="{{ route('employes.verifier', $employe->id) }}">
        @csrf

        <input type="text" name="modele" placeholder="Modèle à chercher">

        <button type="submit">Vérifier</button>

    </form>

    @if(isset($resultat))
        <p>Résultat : {{ $resultat }}</p>
    @endif

@endsection