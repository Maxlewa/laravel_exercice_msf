<?php

namespace App\Http\Controllers;

use App\Models\Eleve;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    public function create() {
        return view('admin.eleves.elevesCreate');
    }
    public function store(Request $request){
        $eleves = new Eleve();
        $eleves->nom = $request->nom;
        $eleves->prenom = $request->prenom;
        $eleves->age = $request->age;
        $eleves->etat = $request->etat;
        $eleves->save();
        return redirect()->route('adminHome');
    }
    public function destroy(Eleve $id) {
        $id->delete();
        return redirect()->back();
    }
    public function show(Eleve $id) {
        $eleves = $id;
        return view('admin.eleves.elevesShow', compact('eleves'));
    }
    public function edit(Eleve $id) {
        $eleves = $id;
        return view('admin.eleves.elevesEdit', compact('eleves'));
    }
    public function update(Eleve $id, Request $request) {
        $eleves = $id;
        $eleves->nom = $request->nom;
        $eleves->prenom = $request->prenom;
        $eleves->age = $request->age;
        $eleves->etat = $request->etat;
        $eleves->save();
        return redirect('/admin' . $eleves->$id);
    }
}
