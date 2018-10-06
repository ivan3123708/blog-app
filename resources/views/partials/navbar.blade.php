<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Left Side Of Navbar -->
      <ul class="navbar-nav mr-auto navbar-left">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">
            <i class="fas fa-home"></i> Home <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-users"></i> Bloggers
          </a>
        </li>
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            <i class="fas fa-th-list"></i> Categories <span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('home.category', ['category' => 'Business']) }}"><i class="fas fa-briefcase"></i> Business</a>
            <a class="dropdown-item" href="{{ route('home.category', ['category' => 'Entertainment']) }}"><i class="far fa-star"></i> Entertainment</a>
            <a class="dropdown-item" href="{{ route('home.category', ['category' => 'Health']) }}"><i class="fas fa-heartbeat"></i> Health</a>
            <a class="dropdown-item" href="{{ route('home.category', ['category' => 'History']) }}"><i class="fas fa-landmark"></i> History</a>
            <a class="dropdown-item" href="{{ route('home.category', ['category' => 'Politics']) }}"><i class="fas fa-user-tie"></i> Politics</a>
            <a class="dropdown-item" href="{{ route('home.category', ['category' => 'Religion']) }}"><i class="fas fa-bible"></i> Religion</a>
            <a class="dropdown-item" href="{{ route('home.category', ['category' => 'Science']) }}"><i class="fas fa-flask"></i> Science</a>
            <a class="dropdown-item" href="{{ route('home.category', ['category' => 'Sport']) }}"><i class="fas fa-basketball-ball"></i> Sport</a>
            <a class="dropdown-item" href="{{ route('home.category', ['category' => 'Technology']) }}"><i class="fas fa-laptop"></i>Technology</a>
          </div>
        </li>
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto navbar-right">
        <!-- Authentication Links -->
        @guest
          <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">
              <i class="fas fa-sign-in-alt"></i> {{ __('Login') }}
            </a>
          </li>
          <li class="nav-item">
            @if (Route::has('register'))
              <a class="nav-link" href="{{ route('register') }}">
                <i class="fas fa-user-plus"></i> {{ __('Register') }}
              </a>
            @endif
          </li>
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              <i class="far fa-user"></i>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('dashboard') }}">
                <i class="fas fa-th"></i> Dashboard
              </a>
              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </div>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>