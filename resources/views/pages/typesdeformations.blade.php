@extends('layouts.index')

@section('content')
    <div class="text-center mt-5">
        <h1 class="mb-4">Formations</h1>
        <hr>
    </div>
    <div class="container text-center mt-4">
        <div class="row">
            @foreach ($varTypesdeformations as $types)
            <div class="col-3">
                <p>{{$types->nom}}</p>
            </div>
            @endforeach
        </div>
    </div>
    <div class="text-center mt-4">
        <a href={{route('home')}}><button class="btn btn-primary">Retour</button></a>
    </div>
@endsection