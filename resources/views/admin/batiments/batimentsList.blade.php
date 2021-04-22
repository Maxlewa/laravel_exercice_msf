@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="text-center">
        <h1>Bâtiments</h1>
        <hr>
    </div>

    <div>
    @foreach ($varBatiments as $batiments)
        <div class="text-center mb-4">
            <h3>{{$batiments->nom}}</h3>
            <div class="text-center mb-2">
                <a href="{{route('batiments.show', $batiments->id)}}"><button class="btn btn-success mb-2">Show</button></a>
                <form method="post" action="{{route('batiments.destroy', $batiments->id)}}">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </div>
        </div>
    @endforeach
    </div>

    <div class="text-center">
        <a href={{route('batiments.create')}}><button class="btn btn-primary">Ajouter un bâtiment</button></a>
        <a href="{{route('adminHome')}}"><button class="btn btn-primary">Retour à Admin</button></a>
    </div>
    
@endsection