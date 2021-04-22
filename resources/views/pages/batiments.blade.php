@extends('layouts.index')

@section('content')
    <div class="text-center mt-5">
        <h1 class="mb-4">Bâtiments</h1>
        <hr>
    </div>
    <div class="text-center mt-4">
        @foreach ($varBatiments as $batiments)
            <p>{{$batiments->nom}}</p>
        @endforeach
    </div>
    <div class="text-center mt-4">
        <a href={{route('home')}}><button class="btn btn-primary">Retour</button></a>
    </div>
@endsection