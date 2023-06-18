@extends('layout.main')

@section('content')

<div class="card" style="width: 40rem;">
    <img src="{{ $comic->thumb }}" class="card-img-top w-50 " alt="...">
    <div class="card-body ">
      <h5 class="card-title">{{ $comic->title }}</h5>
      <p class="card-text">{{ $comic->description }}</p>
      <a href="{{ route('comics.index') }}" class="btn btn-primary">Go Back</a>
    </div>
  </div>

@endsection
