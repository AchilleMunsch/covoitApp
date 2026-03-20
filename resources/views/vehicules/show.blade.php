@extends('layouts.app')

@section('title', 'Détails du véhicule')

@section('content')

    <h1>Détails du véhicule</h1>

    <p>Modèle : {{ $vehicule->modele }}</p>
    <p>Nombre de places : {{ $vehicule->nb_places }}</p>

    <p>Propriétaire : {{ $vehicule->employe->nom }}</p>

@endsection