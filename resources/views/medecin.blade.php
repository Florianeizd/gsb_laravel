@extends('layouts.master')

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des medecins</h3>

    <div class="mt-4">
        <div class="d-flex justify-content-end mb-2">
            <a href="{{ route('medecin.create')}}" class="btn btn-primary">Creer un medecin</a>
        </div>
        <table class="table table-bordered table-hover">
    <thead>
        <tr>
         <th scope="col">#</th>
         <th scope="col">Nom</th>
         <th scope="col">Prénom</th>
         <th scope="col">Adresse</th>
         <th scope="col">Télephone</th>
         <th scope="col">Spécialité</th>
         <th scope="col">Département</th>
        </tr>
    </thead>
    <tbody>
        @foreach($medecins as $medecin)
        <tr>
            <th scope="row">{{ $medecin->id }}</th>
            <td>{{ $medecin->nom }}</td>
            <td>{{ $medecin->prenom }}</td>
            <td>{{ $medecin->adresse }}</td>
            <td>{{ $medecin->tel }}</td>
            <td>{{ $medecin->spe }}</td>
            <td>{{ $medecin->departement }}</td>
            <td>
                <a href="" class="btn btn-warning" style="color: white">Modifier</a>
                <a href="" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
        @endforeach
        
    </tbody>
    
    </table>{{ $medecins->links() }}
    </div>
</div>
@endsection