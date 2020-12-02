  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/home">Start Bootstrap</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/blogs">Blogs</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          {{-- <li class="nav-item">
            <a href="{{ route('login') }}" class="nav-link">Login</a>
          </li>
          <li class="nav-item">
            <a href="{{ route('register') }}" class="nav-link">register</a>
          </li> --}}
          @if (Route::has('login'))
            <li class="nav-item">
              <a class="nav-link" href="#">{{ Auth::user()->name  }}</a>
            </li>
          
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" style="font-size: 12px;
                  font-weight: 800;color:white !important;
                  letter-spacing: 1px;
                  text-transform: uppercase;">
                    {{ __('Logout') }}
                </a>
              </li>
          </form>
              @else
                  @if (Route::has('register'))
                      <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                  @endif
          @endif
        </ul>
      </div>
    </div>
  </nav>

  
