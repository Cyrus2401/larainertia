<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NiveauScolaire;

class NiveauScolaireController extends Controller
{
    public function index(){

        $niveauScolaires = NiveauScolaire::orderBy('nom', 'ASC')->paginate(2);

        return inertia('NiveauScolaire/Index', [

            'niveauScolaires' => $niveauScolaires

        ]);

    }
}
