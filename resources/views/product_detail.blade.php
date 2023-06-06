@extends('layout.main')

@section('content')

<div class="mb-container product-section">

    <div class="product-box">

        <div class="up-box d-flex">
            <div class="image-box">
                <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            </div>
            <div class="desc-box">
                <h2>{{ $comic['title'] }}</h2>
                <p>{{ $comic['description'] }}</p>
                <div class="info-box d-flex  justify-content-between">
                    <span>{{ $comic['price'] }}</span>
                    <span>disponibile</span>
                </div>
            </div>
        </div>

        <div class="bot-box d-flex">
            <div class="talent">
                <h4>Talent</h4>
                <div class="row">
                  <div class="col-4">Art by:</div>
                  <div class="col-8">{{ implode(",",$comic['artists'])  }}</div>
                </div>
                <div class="row">
                  <div class="col-4">Written by:</div>
                  <div class="col-8">{{ implode(",",$comic['writers'])  }}</div>
                </div>

            </div>

            <div class="specs">
                <h4>Specs</h4>
                <div class="row">
                  <div class="col-4">Series</div>
                  <div class="col-8">{{ $comic['series'] }}</div>
                </div>
                <div class="row">
                  <div class="col-4">US price:</div>
                  <div class="col-8">{{ $comic['price'] }}</div>
                </div>
                <div class="row">
                  <div class="col-4">On Sale Date:</div>
                  <div class="col-8">{{ $comic['sale_date'] }}</div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
