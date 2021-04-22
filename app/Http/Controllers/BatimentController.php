<?php

namespace App\Http\Controllers;

use App\Models\Batiment;
use Illuminate\Http\Request;

class BatimentController extends Controller
{
    public function create() {
        return view('admin.batiments.batimentsCreate');
    }
    public function store(Request $request){
        $batiments = new Batiment();
        $batiments->nom = $request->nom;
        $batiments->description = $request->description;
        $batiments->save();
        return redirect()->route('adminHome');
    }
    public function destroy(Batiment $id) {
        $id->delete();
        return redirect()->back();
    }
    public function show(Batiment $id) {
        $batiments = $id;
        return view('admin.batiments.batimentsShow', compact('batiments'));
    }
    public function edit(Batiment $id) {
        $batiments = $id;
        return view('admin.batiments.batimentsEdit', compact('batiments'));
    }
    public function update(Batiment $id, Request $request) {
        $batiments = $id;
        $batiments->nom = $request->nom;
        $batiments->description = $request->description;
        $batiments->save();
        return redirect('/admin' . $batiments->$id);
    }
}
