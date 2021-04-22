@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="text-center">
        <h1>Elèves</h1>
        <hr>
    </div>

    <div class="container mb-4">
        <div class="row mb-5">
            @foreach ($varEleves as $eleves)
            <div class="col-3">
                <h3>{{$eleves->prenom}} {{$eleves->nom}}</h3>
                <div class="d-flex mb-4">
                    <a href="{{route('eleves.show', $eleves->id)}}"><button class="btn btn-success mr-2">Show</button></a>
                    <form method="post" action="{{route('eleves.destroy', $eleves->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="text-center mb-4">
        <a href={{route('eleves.create')}}><button class="btn btn-primary">Ajouter un élève</button></a>
        <a href="{{route('adminHome')}}"><button class="btn btn-primary">Retour à Admin</button></a>
    </div>
    
@endsection