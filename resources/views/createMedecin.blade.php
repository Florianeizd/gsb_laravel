@extends('layouts.master')

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
 <h3 class="border-bottom pb-2 mb-4">Ajout d'un nouveau medecin</h3>

    <div class="mt-4">
    
        @if(session()->has("success"))
            <div class="alert alert-success">
                <h3>{{ session()->get('success') }}</h3>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div> 
         @endif
        <form style="width:50%;" method="post" action="{{ route('medecin.ajouter')}}">

            @csrf

            <div class="form-group">
              <label for="text">Nom du médecin</label>
              <input type="text" class="form-control" placeholder="Entrer le nom" name="nom">
            </div>
            <div class="form-group">
              <label for="text">Prénom</label>
              <input type="text" class="form-control" placeholder="Entrer le prénom" name="prenom">
            </div>
            <div class="form-group">
                <label for="text">Adresse</label>
                <input type="text" class="form-control" placeholder="Entrer l'adresse" name="adresse">
            </div>
            <div class="form-group">
                <label for="text">Téléphone</label>
                <input type="text" class="form-control" placeholder="Entrer le numero de téléphone" name="tel">
            </div>
            <div class="form-group">
                <label for="text">Spécialité</label>
                <input type="text" class="form-control" placeholder="Entrer la spécialité" name="spe">
            </div>
            <div class="form-group">
                <label for="text">Département</label>
                <input type="text" class="form-control" placeholder="Entrer le département" name="departement">
            </div>
            <br>
            <a href={{ route('medecin') }} class="btn btn-danger">Annuler</a>
            <button type="submit" class="btn btn-primary">Créer</button>
            
          </form>
    </div>
</div>
@endsection