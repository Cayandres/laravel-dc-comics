@extends('layout.main')

@section('content')
<div class="bg-dark">
   <div class="container d-flex pt-5 pb-5" style="width: 70rem; color:white">
    <div>
        @if ($comic->thumb)
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        @else
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAYFBMVEX///8AAACgoKClpaXu7u5vb2/U1NScnJzm5ubp6ekLCwvDw8OkpKT19fUhISHi4uKsrKw2NjZycnIUFBROTk5GRkY8PDyzs7N5eXkRERFWVla+vr5KSkpgYGBbW1uPj49e7VtFAAAB8UlEQVR4nO3b626iQACA0WLtlepatd2Lu9v3f8sVRBAKLk1ImJmc86sDhfQLMzox9eYGAAAAAAAAAAAAAAAAAAAAAADgmvuHxXQe7ufO6bHIprSYO6fH7aSFt3Pn9DgWria61SrYwuVEt1oqnIfCL1A4E4VfkGbhZr9+O2elWLh8LXcy68fTKMHC92qzti5HCRZ+b++4Iyr88W3ctXd14b4YxlN4l/18GnXtW11YTtNoCssnM2rmNs/wVzGMpbD6sx9HXHuoCzfFMJLC83PZjUncV7/8Wo7iKGwm3vOItbj6fQo83SGKwibwaMzLTb79sz1UP8dQ2ArMnocm6sCbSQSF7cDBtZgPhIRf2A0ceNPIhz5TC76wJ7BvLR6abVpH6IW9gZ8nal6d6GkJvLA/MOtu4PL6xOeYsAuHAjtrMb84/tK9VdCFVwIvN3CH1vHuWgy58GpgsxbzzolOT7iFq+3VwHoD1w3sBgVbuPv7n8Ds9KZx6DnemqjBFo5x3MD1BbZfbqIuzNabgRMXTXEXDmuiUi1s1mKyhfVaTLfw3JVwYfUUUy4M/TPvKRRpaRcWbYkXHidq6oXZS7j/MTSVj13qhVnyz1DhTBQqVDg/hQoVzk9h/IXpf2cm/e89AQAAAAAAAAAAAAAAAAAAAAAAIfkHHT0UCPv9sXUAAAAASUVORK5CYII=" alt="vuoto">
        @endif
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
</div>




@endsection
