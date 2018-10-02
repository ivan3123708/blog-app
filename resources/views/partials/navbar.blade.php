<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto navbar-left">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Bloggers</a>
          </li>
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              Categories <span class="caret"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ route('home.category', ['category' => 'business']) }}">Business</a>
              <a class="dropdown-item" href="{{ route('home.category', ['category' => 'entertainment']) }}">Entertainment</a>
              <a class="dropdown-item" href="{{ route('home.category', ['category' => 'health']) }}">Health</a>
              <a class="dropdown-item" href="{{ route('home.category', ['category' => 'history']) }}">History</a>
              <a class="dropdown-item" href="{{ route('home.category', ['category' => 'politics']) }}">Politics</a>
              <a class="dropdown-item" href="{{ route('home.category', ['category' => 'religion']) }}">Religion</a>
              <a class="dropdown-item" href="{{ route('home.category', ['category' => 'science']) }}">Science</a>
              <a class="dropdown-item" href="{{ route('home.category', ['category' => 'social']) }}">Social</a>
              <a class="dropdown-item" href="{{ route('home.category', ['category' => 'sport']) }}">Sport</a>
              <a class="dropdown-item" href="{{ route('home.category', ['category' => 'technology']) }}">Technology</a>
            </div>
          </li>
        </ul>

        <!-- Middle Of Navbar -->
        <ul class="navbar-nav">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto navbar-right">
          <li class="nav-item">
            <a class="nav-link" href="#">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Register</a>
          </li>
        </ul>
    </div>
  </div>
</nav>