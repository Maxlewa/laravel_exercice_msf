@extends('layouts.index')

@section('content')
    <div class="text-center mt-5">
        <h1 class="mb-4">ADMIN</h1>
        <hr>
    </div>
    <div class="container text-center mt-5 mb-3">
        <div class="row">
            <div class="col">
                <a href={{route('batimentsList')}}><button class="btn btn-warning">Bâtiments</button></a>
            </div>
            <div class="col">
                <a href={{route('formationsList')}}><button class="btn btn-warning">Formations</button></a>
            </div>
            <div class="col">
                <a href={{route('typesList')}}><button class="btn btn-warning">Types de formations</button></a>
            </div>
            <div class="col">
                <a href={{route('elevesList')}}><button class="btn btn-warning">Elèves</button></a>
            </div>
        </div>
    </div>
    <div class="text-center mt-5">
        <a href={{route('home')}}><button class="btn btn-primary">Retour</button></a>
    </div>
@endsection