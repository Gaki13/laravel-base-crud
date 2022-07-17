@extends('layouts.base')

@section('page-title')
    Dc comics collection
@endsection

@section('page-content')
    <h1>Tutti i nostri fumetti</h1>
    <table class="table table-striped">
        <thead>
            <th scope="col">Titolo</th>
            <th scope="col">Copertina</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Categoria</th>
            <th scope="col">Altro</th>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                   <td>{{$comic->title}}</td>  
                   <td><img src="{{$comic->thumb}}"></td>  
                   <td>${{$comic->price}}</td>  
                   <td>{{$comic->type}}</td>  
                   <td>
                        <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary">Dettagli</a>
                        <a href="" class="btn btn-secondary">Modifica</a>
                        <a href="" class="btn btn-danger">Elimina</a>
                    </td>  
                </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{route('comics.create')}}" class="btn btn-secondary">Aggiunti il tuo fumetto qui</a>
@endsection