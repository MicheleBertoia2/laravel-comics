@extends('layout.main')

@section('content')

<div class="mb-container product-section">

    <div class="product-box">

        <div class="up-box d-flex">
            <div class="image-box">
                <img src="https://imgs.search.brave.com/aUNyvZBXUulb963JH7KnQm9AMr8bcBoLsiHREOqayIU/rs:fit:612:612:1/g:ce/aHR0cHM6Ly9pNS53/YWxtYXJ0aW1hZ2Vz/LmNvbS9hc3IvOWZm/ZWYzMDMtMGZhYy00/OGRkLTg3ODctYzUy/NTk0MDk2ODAwXzEu/MTc1ZDk1Mjg2NzY0/OGEwOTczMTY2NGMy/MTE1NjNlYWIuanBl/Zz9vZG5XaWR0aD02/MTImb2RuSGVpZ2h0/PTYxMiZvZG5CZz1m/ZmZmZmY" alt="">
            </div>
            <div class="desc-box">
                <h2>titolo</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Modi ullam, quibusdam rerum tempore ratione non, sequi pariatur eaque nulla eos neque asperiores aspernatur hic culpa! Quae magni quibusdam, nobis necessitatibus sequi, obcaecati culpa quam sint veritatis perspiciatis id dignissimos. Inventore aliquam sapiente excepturi numquam optio, neque vero. Doloribus, numquam molestiae.</p>
                <div class="info-box d-flex  justify-content-between">
                    <span>prezzo</span>
                    <span>disponibile</span>
                </div>
            </div>
        </div>

        <div class="bot-box d-flex">
            <div class="talent">
                <h4>Talent</h4>
                <div class="row">
                  <div class="col-4">Art by:</div>
                  <div class="col-8">artisti</div>
                </div>
                <div class="row">
                  <div class="col-4">Written by:</div>
                  <div class="col-8">scrittori</div>
                </div>

            </div>

            <div class="specs">
                <h4>Specs</h4>
                <div class="row">
                  <div class="col-4">Series</div>
                  <div class="col-8">serie</div>
                </div>
                <div class="row">
                  <div class="col-4">US price:</div>
                  <div class="col-8">prezzo</div>
                </div>
                <div class="row">
                  <div class="col-4">On Sale Date:</div>
                  <div class="col-8">data</div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
