@extends('layouts.index')

@section('content')
    <div class="text-center mt-5">
        <h1 class="mb-4">WELCOME</h1>
        <hr>
    </div>
    <div class="container text-center mt-5 mb-3">
        <div class="row">
            <div class="col">
                <a href={{route('batiments')}}><button class="btn btn-primary">Bâtiments</button></a>
            </div>
            <div class="col">
                <a href={{route('formations')}}><button class="btn btn-primary">Formations</button></a>
            </div>
            <div class="col">
                <a href={{route('typesdeformations')}}><button class="btn btn-primary">Types de formations</button></a>
            </div>
            <div class="col">
                <a href={{route('eleves')}}><button class="btn btn-primary">Elèves</button></a>
            </div>
        </div>
    </div>
    <div class="text-center mt-5">
        <a href={{route('adminHome')}}><button class="btn btn-dark px-5 py-2">ADMIN</button></a>
    </div>
@endsection