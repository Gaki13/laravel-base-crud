@extends('layouts.base')

@section('page-title')
    {{$comic->title}}
@endsection

@section('page-content')
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->thumb}}">
    <h2>Prezzo: ${{$comic->price}}</h2>
    <h3>{{$comic->series}}</h3>
    <h4>Ecco un piccolo riassunto:</h4>
    <p>{{$comic->description}}</p>
    <h3>Data di uscita:{{$comic->sale_date}}</h3>

@endsection