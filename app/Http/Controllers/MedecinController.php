<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class MedecinController extends Controller
{
    public function index(){

        $medecins = Medecin::orderBy("nom", "asc")->paginate(10);
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
            "spe"=>"required",
            "departement"=>"required"
        ]);

        Medecin::create($request->all());

        return back()->with("success", "Medecin ajouté avec succè !");
    }
}
