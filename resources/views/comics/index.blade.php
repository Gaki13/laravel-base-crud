@extends('layouts.base')

@section('page-title')
    Dc comics collection
@endsection

@section('page-content')
    <h1>Tutti i nostri fumetti</h1>
    @dump($comics)
@endsection