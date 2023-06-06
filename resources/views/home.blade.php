@extends('layout.main')

@section('content')

<div class="content">

    <div class="mb-container moved-up">

      <div class="label">
        <span>current series</span>
      </div>

      <div class="cards-container">
        @forelse ($comics as $comic )

            <div class="mb-card">
                <a href="{{ route('product_detail') }}">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                </a>
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

  <section id="actions">

    <ul class="cards mb-container">

      <li class="mb-card">
        <a href="#">
          <img src="/img/buy-comics-digital-comics.png" alt="digital comics">
          <span>digital comics</span>
        </a>
      </li>

      <li class="mb-card">
        <a href="#">
          <img src="/img/buy-comics-merchandise.png" alt="digital comics">
          <span>dc merchandise</span>
        </a>
      </li>

      <li class="mb-card">
        <a href="#">
          <img src="/img/buy-comics-subscriptions.png" alt="digital comics">
          <span>subscriptions</span>
        </a>
      </li>

      <li class="mb-card">
        <a href="#">
          <img src="/img/buy-comics-shop-locator.png" alt="digital comics">
          <span>comic shop locator</span>
        </a>
      </li>

      <li class="mb-card">
        <a href="#">
          <img src="/img/buy-dc-power-visa.svg" alt="digital comics">
          <span>dc power visa</span>
        </a>
      </li>

    </ul>

  </section>

@endsection
