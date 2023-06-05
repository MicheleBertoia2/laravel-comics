@extends('layout.main')

@section('content')

<div class="content">

    <div class="container moved-up">

      <div class="label">
        <span>current series</span>
      </div>

      <div class="cards-container">
        @forelse ($comics as $comic )

            <div class="mb-card">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                <h4>{{ $comic['title'] }}</h4>
            </div>

        @empty

        <p>Non ci sono articoli </p>

        @endforelse

      </div>

    </div>

    <div class="load-more">
      <button>LOAD MORE</button>
    </div>

  </div>

@endsection
