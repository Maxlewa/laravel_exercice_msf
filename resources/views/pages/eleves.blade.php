@extends('layouts.index')

@section('content')
    <div class="text-center mt-5">
        <h1 class="mb-4">Elèves</h1>
        <hr>
    </div>
    <div class="container text-center mt-4">
        <div class="row">
            @foreach ($varEleves as $eleves)
            <div class="col-2">
                <p>{{$eleves->prenom}} {{$eleves->nom}}</p>
            </div>
            @endforeach
        </div>
    </div>
    <div class="text-center mt-4">
        <a href={{route('home')}}><button class="btn btn-primary">Retour</button></a>
    </div>
@endsection