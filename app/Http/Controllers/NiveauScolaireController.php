<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NiveauScolaire;

class NiveauScolaireController extends Controller
{
    public function index(){

        $niveauScolaires = NiveauScolaire::paginate(2);

        return inertia('NiveauScolaire/IndexNiveauScolaire', [

            'niveauScolaires' => $niveauScolaires

        ]);

    }

    public function store(Request $request){

        $request->validate([
            'nom' => 'required'
        ]);

        NiveauScolaire::create([
            "nom" => $request->nom
        ]);

        return redirect()->back();

    }
}
