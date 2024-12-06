    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid position-relative d-flex align-items-center justify-content-between">
    
    
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <img src="assets/img/logo_fasya.png" class="logo d-flex align-items-center me-auto me-xl-0" style="width: 100px; height:auto; margin-left: 8px;" alt="">
    
          <nav id="navmenu" class="navmenu" style=" margin-left: -20px;" alt="">
            <ul>
              <li><a href="{{ url('/') }}">Home<br></a></li>
              <li><a href="{{ url('/') }}">About</a></li>
              <li><a href="{{ url('/') }}">Services</a></li>
              {{-- <li><a href="#portfolio">Portfolio</a></li>
              <li><a href="{{ url('news') }}">Blog</a></li> --}}
    
              <li><a href="#contact">Contact</a></li>
              @if (Route::has('login'))
              @auth
              <form method="POST" action="{{ route('logout') }}">
                @csrf
    
                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>
              @endauth
    
              @endif
    
            </ul>
            <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
          </nav>
    
          {{-- <a class="btn-getstarted" href="index.html#about">Get Started</a> --}}
    
        </div>
      </header>