@extends('layouts.base')

@section('page-title')
    Aggiungi un nuovo fumetto alla collezione
@endsection

@section('page-content')
    <a href="{{route('comics.index')}}" class="btn btn-secondary">Home</a>
    <h1>Aggiungi il tuo fumetto qui</h1>

    <form action="{{route('comics.store')}}" method="POST">
    @csrf
        <div class="mb-3">
          <label for="titolo" class="form-label">Titolo</label>
          <input type="text" class="form-control" id="titolo" name="title">
        </div>

        <div class="mb-3">
            <label for="copertina" class="form-label">Copertina</label>
            <input type="text" class="form-control" id="copertina" name="thumb">
          </div>

        <div class="mb-3">
            <label for="tipologiaFumetto">Tipologia di Fumetto</label>
            <select class="form-select" name="type" id="tipologiaFumetto">
                <option selected>Scegli una Categoria</option>
                <option value="1">Comic Book</option>
                <option value="2">Graphic Novel</option>
              </select>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Aggiungi una serie</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>

        <div class="mb-3">
            <label for="descrizione" class="form-label">Descrivi la trama in poche parole</label>
            <input type="text" class="form-control" id="descrizione" name="description">
        </div>

        <div class="mb-3">
            <label for="prezzo" class="form-label">Prezzo</label>
            <input type="number" class="form-control" id="prezzo" name="price">
        </div>

        <div class="mb-3">
            <label for="date_sale" class="form-label">Data di uscita</label>
            <input type="date" class="form-control" id="date_sale" name="sale_date">
        </div>
        
        <button type="submit" class="btn btn-primary">Aggiungi</button>
      </form>

@endsection