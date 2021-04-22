@extends('layouts.index')

@section('content')
    <br>
    <br>
    <div class="text-center">
        <h1>Créer un bâtiment</h1>
        <hr>
    </div>
    <div class="container">
        <form method="POST" action={{route('batiments.store')}}>
            @csrf
            <label for="nom">Nom</label>
            <input type="text" name="nom" class="form-control">

            <br>

            <label for="description">Description</label>
            <textarea name="description" rows="9" cols="100" class="form-control"></textarea>

            <br>

            <button type="submit" class="btn btn-success">SUBMIT</button>
        </form>
        <div class="text-center">
            <a href="{{route('batimentsList')}}"><button class="btn btn-primary">Retour</button></a>
        </div>
    </div>
@endsection