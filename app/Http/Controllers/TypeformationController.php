<?php

namespace App\Http\Controllers;

use App\Models\Typeformation;
use Illuminate\Http\Request;

class TypeformationController extends Controller
{
    public function create() {
        return view('admin.types.typesCreate');
    }
    public function store(Request $request){
        $types = new Typeformation();
        $types->nom = $request->nom;
        $types->save();
        return redirect()->route('adminHome');
    }
    public function destroy(Typeformation $id) {
        $id->delete();
        return redirect()->back();
    }
    public function show(Typeformation $id) {
        $batiments = $id;
        return view('admin.types.typesShow', compact('types'));
    }
    public function edit(Typeformation $id) {
        $batiments = $id;
        return view('admin.types.typesEdit', compact('types'));
    }
    public function update(Typeformation $id, Request $request) {
        $types = $id;
        $types->nom = $request->nom;
        $types->save();
        return redirect('/admin' . $types->$id);
    }
}
