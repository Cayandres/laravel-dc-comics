@extends('layout.main')

@section('content')

<div class="container d-flex pt-5 pb-5" style="width: 70rem; color:white">
    <div>
        <div class="img-show">
            <img src="{{ $comic->thumb }}" alt="...">
        </div>
    </div>
    <div class="card-body ">
        <h2 class="card-title">{{ $comic->title }}</h2>
        <p class="card-text">{{ $comic->description }}</p>
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Go Back</a>
        <a href="{{ route('comics.edit', $comic) }}" class="btn btn-secondary">Modifica</a>
        <form class="d-inline" action="{{ route('comics.destroy', $comic) }}" method="POST"
        onsubmit="return confirm('Confermi di volerlo eliminare')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" title="Elimina">elmina</button>
    </form>
    </div>
</div>



@endsection
