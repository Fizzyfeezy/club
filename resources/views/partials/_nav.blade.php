<nav class="navbar navbar-expand-lg navbar-dark bg-dark nav navbar-inverse navbar fixed-top">
      <a class="navbar-brand" href="/"><img src="{{ asset('image/club.png') }}" width="10%" height="10%"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="nav navbar-nav mr-auto">
          <li class="{{ Request::is('/') ? "active" : ""}}">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="{{ Request::is('about') ? "active" : ""}}">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="{{ Request::is('contact') ? "active" : ""}}">
            <a class="nav-link" href="/contact">Contact<span class="sr-only">(current)</span></a>
          </li>
        </ul>
       <!-- <ul class="nav navbar-nav navbar-right">
          @if (Auth::check())
            <li class = "dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Hello {{ Auth::user()->name }} <span class = "caret"></span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('logout') }}">Logout</a>
              </div>
            </li> 
          @else

            <a href="{{ route('login') }}" class ="btn btn-default">Login</a>

          @endif
        </ul> -->
      </div>
</nav> <!-- End of navigation bar -->