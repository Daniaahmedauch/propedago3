@extends('template')

@section('titre')
Accueil
@endsection

@section('contenu')

    @foreach($pictures as $pictures)
        
        {{$pictures->picture_name}}
        
    @endforeach

@endsection