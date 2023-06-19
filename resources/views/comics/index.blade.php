@extends('layout.main')

@section('content')
    @if (session('deleted'))
        <div class="alert alert-danger" role="alert">
            {{ session('deleted') }}
        </div>
    @endif
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
                    <td><a href="{{ route('comics.edit', $comic) }}" class="btn btn-secondary">Modifica</a></td>
                    <td>
                        <form class="d-inline" action="{{ route('comics.destroy', $comic) }}" method="POST"
                            onsubmit="return confirm('Confermi di volerlo eliminare')">

                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" title="Elimina">elmina</button>
                        </form>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
