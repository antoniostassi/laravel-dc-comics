@extends('layouts.app')
@section('page-title') New Comic @endsection

@section('main_content')

<div class="container p-3">

    <h3 class="text-center">Crea un Nuovo Comic</h3>
    <form action="{{ route('comics.update', $comic->id)}}" method="POST">

        @csrf <!-- Permette al form di essere autorizzato a mandare richieste POST -->
        @method('PUT')
    
        <div class="mb-3">
            <label for="title" class="form-label">Titolo <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="title" name="title" required maxlength="64" placeholder="Inserisci il titolo..." value="{{$comic->title}}">
        </div>
    
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="description" name="description" required maxlength="1024" placeholder="Inserisci la descrizione..." value="{{$comic->description}}">
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" maxlength="1024" placeholder="Inserisci il link dell'immagine..." value="{{$comic->thumb}}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Prezzo <span class="text-danger">*</span></label>
            <input type="number" class="form-control" id="price" name="price" step='0.1' required placeholder="Inserisci il prezzo..." value="{{$comic->price}}">
        </div>
    
        <div class="mb-3">
            <label for="series" class="form-label">Serie <span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="series" name="series" required maxlength="64" placeholder="Inserisci la serie..." value="{{$comic->series}}">
        </div>

        <div class="mb-3">
            <label for="sale_date" class="form-label">Data vendita</label>
            <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di vendita..." value="{{$comic->sale_date}}">
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" maxlength="30" placeholder="Inserisci la tipologia di comic..." value="{{$comic->type}}">
        </div>


        <div class="mb-3">
            <label for="author" class="form-label">
                Artista
                <button id="add-author-input" class="btn btn-success mb-1 px-1 py-0">+</button>
            </label>
            <div id="author">
                @foreach (json_decode($comic->artists) as $artist)
                    <input type="text" class="form-control mb-2" name="author[]" maxlength="30" placeholder="Inserisci l'artista..." value="{{$artist}}">
                @endforeach
            </div>
        </div>

        <div class="mb-3">
            <label for="writer" class="form-label">
                Scrittore
                <button id="add-writers-input" class="btn btn-success mb-1 px-1 py-0">+</button>
            </label>
            <div id="writers">
                @foreach (json_decode($comic->writers) as $writer)
                    <input type="text" class="form-control mb-2" name="writer[]" maxlength="30" placeholder="Inserisci lo scrittore..." value="{{$writer}}">
                @endforeach
            </div>
        </div>

        <div>
            <button type="submit" class="btn btn-success w-100">
                + Aggiungi
            </button>
        </div>
        

    </form>
</div>
    

@endsection