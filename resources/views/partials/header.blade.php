<header>
  <div class="container py-3">
    <div class="container py-3">
      <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link {{(Route::currentRouteName() === "home") ? 'active' : ''}}" aria-current="page" href="{{route('home')}}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{(Route::currentRouteName() === "offers") ? 'active' : ''}}" href="{{route('offers')}}">Travel Offers</a>
        </li>
      </ul>
    </div>
  </div>
</header>
