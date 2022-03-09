@extends('layouts.master')

@section("contenu")
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <h3 class="border-bottom pb-2 mb-4">Liste des medecins</h3>

    <div class="mt-4">
        <div class="d-flex justify-content-end mb-4">
            <a href="#" class="btn btn-primary">Creer un medecin</a>
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
        <tr>
            <th scope="row">1</th>
            <td>a</td>
            <td>b</td>
            <td>c</td>
            <td>
                <a href="" class="btn btn-info">Modifier</a>
                <a href="" class="btn btn-danger">Supprimer</a>
            </td>
        </tr>
    </tbody>
    </table>
    </div>
</div>
@endsection