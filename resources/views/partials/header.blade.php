<?php
    $menu = config('menus.main_menu')
?>


<header>
    <div class="top-bar mb-container">
        <img src="/img/dc-logo.png" alt="">
        <nav>
          <ul>

              @foreach ($menu as  $item)

              <li><a href="{{ route($item['name']) }}"  class="{{ (Route::currentRouteName()  == $item['name']) ? 'active' : '' }}">{{ $item['text'] }}</a></li>

            @endforeach

            {{-- <li><a href="#" class="active">comics</a></li>
            <li><a href="#">movies</a></li>
            <li><a href="#">tv</a></li>
            <li><a href="#">games</a></li>
            <li><a href="#">collectibles</a></li>
            <li><a href="#">videos</a></li>
            <li><a href="#">fans</a></li>
            <li><a href="#">news</a></li>
            <li><a href="#">shop</a></li> --}}
          </ul>
        </nav>
      </div>
</header>

<div class="jumbo">
    <img src="/img/jumbotron.jpg" alt="dc heroes">
  </div>
