@extends('layouts.master')

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des medecins</h3>

    <div class="mt-4">
        <form action="{{ route('search') }}" method="GET">
            <input type="text" name="search" placeholder="par nom" required/>
            <button class="btn btn-primary" type="submit">Recherche</button>
        </form>
        <br>
        <form action="{{ route('searchD') }}" method="GET">
            <input type="text" name="search" placeholder="par departement" required/>
            <button class="btn btn-primary" type="submit">Recherche</button>
        </form>
        <br>
        <form action="{{ route('searchS') }}" method="GET">
            <input type="text" name="search" placeholder="par spécialité" required/>
            <button class="btn btn-primary" type="submit">Recherche</button>
        </form>
        
        @auth
        <div class="d-flex justify-content-end mb-2">
            <a href="{{ route('medecin.create')}}" class="btn btn-primary">Créer un medecin</a>
        </div>
        @endauth
        @if(session()->has("successDelete"))
        <div class="alert alert-success">
            <h3>{{ session()->get('successDelete') }}</h3>
        </div>
        @endif

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
                <a href="{{ route('medecin.edit', ['medecin'=>$medecin->id])}}" class="btn btn-warning" style="color: white">Modifier</a>
                <a href="#" class="btn btn-danger" onclick="if(confirm('Voulez-vous vraiment supprimer ce médecin ?'))
                {document.getElementById('form-{{$medecin->id}}').submit()}">Supprimer</a>

                <form id="form-{{$medecin->id}}" action="{{route('medecin.supprimer',[
                    'medecin'=>$medecin->id
                ])}}" method="post"> 
                    @csrf
                    <input type="hidden" name="_method" value="delete">
                </form>
            </td>
        </tr>
        @endforeach
        
    </tbody>
    
    </table>
       
</div> 

{{-- {{ $medecins->links() }} --}}

@endsection