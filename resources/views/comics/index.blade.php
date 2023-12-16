@extends('layout.main')

@section('content')
    @if (session('deleted'))
        <div class="alert alert-danger" role="alert">
            {{ session('deleted') }}
        </div>
    @endif
            <main >
                <div class="jumbotron">
                  <img src="jumbotron.jpg" alt="">
                </div>
                <div class="container-background">
                    <div class="container">
                      <span class="ac-button-ad">
                        <a  href="{{ route('comics.create') }}">ADD COMIC</a>
                    </span>
                    <span>CURRENT SERIES</span>
                    @foreach ($comics as $comic)
                    <a class="ac-card" href="{{ route('comics.show', $comic) }}">
                          <div class="ac-card-image">
                            @if ($comic->thumb)
                            <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                            @else
                            <img src="placeholder.png" alt="vuoto">
                            @endif
                          </div>
                          <h4>{{ Str::limit($comic->title, 15) }}</h4>
                    </a>
                    @endforeach


                  </div>
                </div>
              </main>
@endsection
