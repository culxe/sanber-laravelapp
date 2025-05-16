<header id="header" class="header d-flex align-items-center sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center me-auto me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Goodbook</h1><span>.</span>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/">Home</a></li>
          <li><a href="/book">Daftar Buku</a></li>
          <li><a href="/genre">Genre</a></li>
          @auth
          <li><a href="/profile">Profile</a></li>
          @endauth
    
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      @guest
      <nav id="navmenu" class="navmenu ">
        <ul>
          <li><a href="/login" class="fw-bold">Login</a></li>
          <li><a href="/register" class="fw-bold">Register</a></li>
        </ul>
  
      </nav>
      @endguest

      @auth
      <form action="/logout" method="POST">
        @csrf
        <button class="btn btn-danger">Logout</button>
      </form>
      @endauth


      

    </div>
  </header>