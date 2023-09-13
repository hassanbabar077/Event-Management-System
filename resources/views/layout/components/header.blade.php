<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
      <a class="navbar-brand" href="{{route('index')}}">Even<span>talk.</span></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span> Menu
      </button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto px-5">
          <li class="nav-item active"><a href="{{route('index')}}" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
          <li class="nav-item"><a href="{{route('event')}}" class="nav-link">Events</a></li>

          <li class="nav-item"><a href="{{route('organizer.login')}}" class="nav-link">Organizer</a></li>
          <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>

          @if (Route::is('attendee'))
          @if (!Auth::guard('attendee')->check())
          <li class="nav-item cta mr-md-2"><a href="{{route('attendee.login')}}" class="nav-link">Login</a></li>
          @endif
          @if (Auth::guard('attendee')->check())
          <li class="nav-item cta mr-md-2"><a href="{{route('attendee.logout')}}" class="nav-link">Logout</a></li>
          @endif
          @endif
        </ul>
      </div>
    </div>
  </nav>
<!-- END nav -->
