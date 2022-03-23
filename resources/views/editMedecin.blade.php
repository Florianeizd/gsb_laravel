@extends('layouts.master')

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
 <h3 class="border-bottom pb-2 mb-4">Edition d'un medecin</h3>

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
        <form style="width:50%;" method="post" action="{{ route('medecin.update', ['medecin'=>$medecin->id])}}">

            @csrf

            <input type="hidden" name="_method" value="put">

            <div class="form-group">
              <label for="text">Nom du médecin</label>
              <input type="text" class="form-control" placeholder="Entrer le nom" name="nom" value="{{$medecin->nom}}">
            </div>
            <div class="form-group">
              <label for="text">Prénom</label>
              <input type="text" class="form-control" placeholder="Entrer le prénom" name="prenom" value="{{$medecin->prenom}}">
            </div>
            <div class="form-group">
                <label for="text">Adresse</label>
                <input type="text" class="form-control" placeholder="Entrer l'adresse" name="adresse" value="{{$medecin->adresse}}">
            </div>
            <div class="form-group">
                <label for="text">Téléphone</label>
                <input type="text" class="form-control" placeholder="Entrer le numero de téléphone" name="tel" value="{{$medecin->tel}}">
            </div>
            <div class="form-group">
                <label for="text">Spécialité</label>
                <input type="text" class="form-control" placeholder="Entrer la spécialité" name="spe" value="{{$medecin->spe}}">
            </div>
            <div class="form-group">
                <label for="text">Département</label>
                <input type="text" class="form-control" placeholder="Entrer le département" name="departement" value="{{$medecin->departement}}">
            </div>
            <br>
            <a href={{ route('medecin') }} class="btn btn-danger">Annuler</a>
            <button type="submit" class="btn btn-primary">Créer</button>
            
          </form>
    </div>
</div>
@endsection