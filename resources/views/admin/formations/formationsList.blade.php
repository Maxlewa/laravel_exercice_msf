@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="text-center">
        <h1>Formations</h1>
        <hr>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($varFormations as $formations)
            <div class="col-4">
                <h3>{{$formations->nom}}</h3>
                <div class="d-flex mb-4">
                    <a href="{{route('formations.show', $formations->id)}}"><button class="btn btn-success mr-2">Show</button></a>
                    <form method="post" action="{{route('formations.destroy', $formations->id)}}">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <div class="text-center">
        <a href={{route('formations.create')}}><button class="btn btn-primary">Ajouter une formation</button></a>
        <a href="{{route('adminHome')}}"><button class="btn btn-primary">Retour à Admin</button></a>
    </div>
    
@endsection