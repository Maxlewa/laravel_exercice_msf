@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="text-center">
        <h1>Créer un bâtiment</h1>
        <hr>
    </div>
    <div class="container">
        <form method="POST" action={{route('eleves.store')}}>
            @csrf
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control">

            <br>
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" class="form-control">

            <br>
            <label for="age">Age</label>
            <input type="number" name="age" class="form-control">

            <br>
            <label for="etat">Etat</label>
            <input type="checkbox" name="etat" class="form-control">

            <br>

            <button type="submit" class="btn btn-success">SUBMIT</button>
        </form>
        <div class="text-center">
            <a href="{{route('elevesList')}}"><button class="btn btn-primary">Retour</button></a>
        </div>
    </div>
@endsection