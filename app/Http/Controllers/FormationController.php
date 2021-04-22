<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function create() {
        return view('admin.formations.formationsCreate');
    }
    public function store(Request $request){
        $formations = new Formation();
        $formations->nom = $request->nom;
        $formations->description = $request->description;
        $formations->save();
        return redirect()->route('adminHome');
    }
    public function destroy(Formation $id) {
        $id->delete();
        return redirect()->back();
    }
    public function show(Formation $id) {
        $batiments = $id;
        return view('admin.formations.formationsShow', compact('formations'));
    }
    public function edit(Formation $id) {
        $batiments = $id;
        return view('admin.formations.formationsEdit', compact('formations'));
    }
    public function update(Formation $id, Request $request) {
        $formations = $id;
        $formations->nom = $request->nom;
        $formations->description = $request->description;
        $formations->save();
        return redirect('/admin' . $formations->$id);
    }
}
