@extends('layout.main')

@section('content')
    <div class="container text-light">

        <h1>Crezione Comics</h1>
        @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ( $errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
        @endif


        <form action="{{ route('comics.store') }}" method="POST">

            @csrf{{-- dobbiamo inserirlo in ogni form senno con laravel non funziona --}}

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror"  id="title" name="title"
                value={{ old('title') }}>

                @error('title')
                    <p>{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label" >Descrizione</label>
                <textarea type="text" class="form-control" id="description" name="description" cols="30" rows="10" >{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}" >
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Venduto il:</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date">
            </div>

            <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="type" name="type">
            </div>

            <div class="mb-3">
                <label for="artists" class="form-label">Artisti</label>
                <input type="text" class="form-control" id="artists" name="artists">
            </div>

            <div class="mb-3">
                <label for="writers" class="form-label">Scrittori</label>
                <input type="text" class="form-control" id="writers" name="writers">
            </div>

            <button class="btn btn-primary" type="submit">Invia</button>
        </form>






    </div>
@endsection
