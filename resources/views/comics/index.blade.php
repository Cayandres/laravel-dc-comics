@extends('layout.main')

@section('content')

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">#id</th>
        <th scope="col">Titolo</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Azione</th>


      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic)
        <tr>
          <td>{{ $comic->id }}</td>
          <td>{{ $comic->title }}</td>
          <td>{{ $comic->price }}</td>
          <td><a href="{{ route('comics.show', $comic) }}" class="btn btn-primary">Vai</a></td>
          <td><a href="{{ route('comics.create', $comic) }}" class="btn btn-secondary">Nuovo</a></td>

        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
