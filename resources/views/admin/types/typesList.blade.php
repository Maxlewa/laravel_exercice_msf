@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="text-center">
        <h1>Types de formations</h1>
        <hr>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($varTypes as $types)
            <div class="col-4">
                <h3>{{$types->nom}}</h3>
                <div class="d-flex mb-4">
                    <a href="{{route('types.show', $types->id)}}"><button class="btn btn-success mr-2">Show</button></a>
                    <form method="post" action="{{route('types.destroy', $types->id)}}">
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
        <a href={{route('types.create')}}><button class="btn btn-primary">Ajouter un type de formation</button></a>
        <a href="{{route('adminHome')}}"><button class="btn btn-primary">Retour à Admin</button></a>
    </div>
    
@endsection