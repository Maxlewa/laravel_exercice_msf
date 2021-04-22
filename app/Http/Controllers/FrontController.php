<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use App\Models\Eleve;
use App\Models\Formation;
use App\Models\Typeformation;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home() {
        return view('home');
    }
    public function batiments() {
        $varBatiments = Batiment::all();
        return view('pages.batiments', compact('varBatiments'));
    }
    public function eleves() {
        $varEleves = Eleve::all();
        return view('pages.eleves', compact('varEleves'));
    }
    public function formations() {
        $varFormations = Formation::all();
        return view('pages.formations', compact('varFormations'));
    }
    public function typesdeformations() {
        $varTypesdeformations = Typeformation::all();
        return view('pages.typesdeformations', compact('varTypesdeformations'));
    }
}
