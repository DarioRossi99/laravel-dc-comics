@extends('layouts.app')

@section('content')
  <h1 class="d-flex justify-content-between">
    Lista prodotti

    <a href="{{ route('comics.create') }}" class="btn btn-primary">
      Aggiungi
    </a>
  </h1>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Descrizione</th>
        <th>Prezzo</th>
        <th>Disponibile</th>
        <th></th>
      </tr>
    </thead>

    <tbody>
      @foreach ($comics as $element)
        <tr>
         
          <td>{{ $element['name'] }}</td>
          <td>{{ Str::limit($element->description, 50) }}</td>
          <td>€ {{ $element->price }}</td>
          <td>{{ $element->available === 1 ? 'Si' : ' No' }}</td>
          <td class="text-nowrap">
            <a href="{{ route('comics.show', $element->id) }}" class="btn btn-primary">
              Visualizza dettagli
            </a>
            <a href="{{route('comics.edit', $element->id)}}" class="btn btn-success">Modifica fumetto</a>

            <form action="{{ route('comics.destroy', $element->id) }}" method="POST" class="delete-form d-inline-block">
              @csrf()
              @method('delete')

              <button class="btn btn-danger">
                X
              </button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>

  <script>
    const forms = document.querySelectorAll(".delete-form");
    forms.forEach((form) => {
      form.addEventListener("submit", function(e) {
        e.preventDefault();
        const conferma = confirm("Sicuro?");
        if (conferma === true) {
          form.submit();
        }
      })
    })
  </script>
@endsection