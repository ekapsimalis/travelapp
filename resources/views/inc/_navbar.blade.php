
     <nav>
        <div class="nav-wrapper brown darken-3">
            <div class="container">
        <a href="{{route('home')}}" class="brand-logo">TravelMe</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="{{route('about')}}">Contact us </a></li>
            <li><a href="{{route('countries')}}">Explore</a></li>
            @if (Auth::guest())
              <li><a href="{{route('login')}}">LogIn</a></li>
              <li><a href="{{route('signup')}}">SignUp</a></li>
            @endif
            @if (!Auth::guest())
              <li><a href="{{route('dashboard')}}">Hello {{ Auth::user()->username }}</a></li>
              <li><a href="{{route('logout')}}">Log Out</a></li>
              @if (auth()->user()->isAdmin())
                <li><a href="{{route('admin')}}">Admin Panel</a></li>
              @endif
            @endif
          </ul>
            </div>
        </div>
      </nav>
  