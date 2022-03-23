<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use Illuminate\Http\Request;

class MedecinController extends Controller
{

    public function index(){

        $medecins = Medecin::orderBy("nom", "asc")->paginate(1000);
        return view("medecin", compact("medecins"));


    }

    public function create(){

        $medecins = Medecin::all();
        return view("createMedecin", compact("medecins"));
    }

    public function store(Request $request){
    

        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "adresse"=>"required",
            "tel"=>"required",
            "departement"=>"required"
        ]);

        Medecin::create($request->all());

        return back()->with("success", "Medecin ajouté avec succès !");
    }

    public function delete(Medecin $medecin){
        $nom_complet = $medecin->nom ." ". $medecin->prenom;
        $medecin->delete();

        return back()->with("successDelete", "Le médecin '$nom_complet' supprimé avec succès !");
    }

    public function update(Request $request, Medecin $medecin){
    

        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "adresse"=>"required",
            "tel"=>"required",
            "departement"=>"required"
        ]);

        $medecin->update([
            "nom"=>$request->nom,
            "prenom"=>$request->prenom,
            "adresse"=>$request->adresse,
            "tel"=>$request->tel,
            "departement"=>$request->departement
        ]);

        return back()->with("success", "Medecin modifié avec succès !");
    }

    public function edit(Medecin $medecin){

        $medecins = Medecin::all();
        return view("editMedecin", compact("medecin", "medecins"));
    }

    public function searchNom(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
    
        // Search in the title and body columns from the medecins table
        $medecins = Medecin::query()
            ->where('nom', 'LIKE', "%{$search}%")
            ->get();
        
        // Return the search view with the resluts compacted
        return view('medecin', compact('medecins'));
    }


}
