<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminHome() {
        return view('admin.adminHome');
    }
    public function elevesList() {
        return view('admin.elevesList');
    }
    public function batimentsList() {
        return view('admin.batimentsList');
    }
    public function formationsList() {
        return view('admin.formationsList');
    }
    public function typesList() {
        return view('admin.typesList');
    }
}
