<h1>Détails du véhicule</h1>

<p>Modèle : {{ $vehicule->modele }}</p>
<p>Marque : {{ $vehicule->marque }}</p>
<p>Immatriculation : {{ $vehicule->immatriculation }}</p>

<p>Propriétaire : {{ $vehicule->employe->nom }}</p>