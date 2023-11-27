<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NiveauScolaireController extends Controller
{
    public function index(){

        $niveauScolaire = NiveauScolaire::orderBy('nom', 'ASC')->get();

        return inertia('NiveauScolaire/Index', [

            'niveauScolaire' => $niveauScolaire

        ]);

    }
}
