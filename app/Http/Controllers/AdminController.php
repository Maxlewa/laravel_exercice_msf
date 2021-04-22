<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use App\Models\Eleve;
use App\Models\Formation;
use App\Models\Typeformation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminHome() {
        return view('admin.adminHome');
    }
    public function elevesList() {
        $varEleves = Eleve::all();
        return view('admin.eleves.elevesList', compact('varEleves'));
    }
    public function batimentsList() {
        $varBatiments = Batiment::all();
        return view('admin.batiments.batimentsList', compact('varBatiments'));
    }
    public function formationsList() {
        $varFormations = Formation::all();
        return view('admin.formations.formationsList', compact('varFormations'));
    }
    public function typesList() {
        $varTypes = Typeformation::all();
        return view('admin.types.typesList', compact('varTypes'));
    }
}
