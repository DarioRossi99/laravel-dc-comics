@extends('layouts.app')

@section('content')
  <h1>Modifica fumetto{{ $comic->id }}</h1>

  <form action="{{ route('comics.update', $comic->id) }}" method="POST">
    @csrf
    @method('put')

    <div class="mb-3">
      <label class="form-label">Titolo</label>
      <input type="text" class="form-control" name="name" value="{{ $comic->name }}">
    </div>
    <div class="mb-3">
      <label class="form-label">Descrizione</label>
      <textarea name="description" cols="30" rows="5" class="form-control">{{ $comic->description }}</textarea>
    </div>
    <div class="mb-3">
      <label class="form-label">Prezzo</label>
      <input type="number" step=".01" class="form-control" name="price" value="{{ $comic->price }}">
    </div>
    <div class="mb-3">
      <div class="form-check">
        <input class="form-check-input" type="checkbox"
                name="available" id="flexCheckDefault"
                {{ $comic->available ? 'checked' : '' }}>
        <label class="form-check-label" for="flexCheckDefault">
          Disponibile
        </label>
      </div>
    </div>

    <button class="btn btn-primary" type="submit">Carica fumetto</button>
  </form>
@endsection