@extends('layouts.app')

@section('content')
    
  <h1>{{ $comic->name }} ({{ $comic->id }})</h1>

  <div class="d-flex gap-3">
    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-link">
    </a>
  </div>

  <p class="lead">{{ $comic->description }}</p>
  <ul>
    <li><strong>Prezzo:</strong> {{ $comic->price }}</li>
    <li><strong>Disponibile:</strong> {{ $comic->available === 1 ? 'Si' : 'No' }}</li>
  </ul>
@endsection