<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow-box" style="box-shadow: 0 3px 5px rgba(0, 0, 0, 0.1);">
  <div class="container d-flex align-items-center justify-content-between">

    <!-- Logo -->
    <a class="navbar-brand" href="/">
      <img src="{{ asset('images/logo.png') }}" alt="Bimbel Logo" width="150">
    </a>

    <!-- Button for mobile view (hamburger menu) -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse justify-content-center align-items-center ms-5" id="navbarNav"> 
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link fw-semibold me-3" id="link-home" href="/#beranda">Beranda</a>
      </li>
      <li class="nav-item">
          <a class="nav-link fw-semibold me-3" id="link-paket" href="/#paketKelas">Paket Kelas</a>
      </li>
      <li class="nav-item">
          <a class="nav-link fw-semibold me-3" id="link-tentang" href="/#tentang-bimbel">Tentang Bimbel</a>
      </li>

      @auth
      <li class="nav-item">
        <a class="nav-link fw-semibold {{ request()->routeIs('class') ? 'active-link' : '' }}" href="{{ route('class') }}">
            Kelas
        </a>
    </li>
    
      @endauth

      </ul>
    </div>

    <!-- Search Bar and Login/Profile Section -->
    <div class="d-flex mt-2"> 
      <form class="d-flex me-3 mt-3">
          <input class="form-control" type="search" placeholder="Cari" aria-label="Search" style="max-width: 200px;">
      </form>

      @guest
          <a href="/login" class="btn btn-primary btn-lg mb-3 rounded align-self-center btn-login">Login</a>
      @endguest

      @auth

      <div class="d-flex align-items-center nav-item py-2 mb-3">
        <!-- Notifications Icon with Badge -->
        <a class="nav-link notification-container me-3" href="{{ route('inbox') }}">
            <div class="notification-icon position-relative px-3 py-2">
                @if (Request::route()->getName() == 'inbox')
                    <img src="{{ asset('images/filled_bells.svg') }}" alt="Notifications" style="width: 24px; height: 24px;">
                @else
                    <img src="{{ asset('images/new_bells.svg') }}" alt="Notifications" style="width: 24px; height: 24px;">
                @endif
                    <span class="notification-badge">
                    </span>
            </div>
        </a>
    
        <!-- Profile Dropdown -->
        <div class="nav-item dropdown profile-section">
            <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <!-- User Profile Picture -->
                <img class="rounded-circle me-2" 
                     src="{{ asset('images/profile.jpg') }}"
                     width="32" height="32" alt="Profile Picture">
    
                <!-- Username -->
                <span class="fw-semibold">{{ Auth::user()->name }}</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                <li><button class="dropdown-item" data-bs-target="#signOutModal" data-bs-toggle="modal">Sign Out</button></li>
            </ul>
        </div>
    </div>
    
      @endauth
    </div>

    

  </div>
</nav>

<!-- Sign Out Warning Modal -->
<div class="modal fade" id="signOutModal" tabindex="-1" aria-labelledby="signOutModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="signOutModalLabel">Sign Out</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">Apakah Anda ingin signout?</div>
          <div class="modal-footer">
              <!-- Form untuk Logout -->
              <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-outline-danger">Sign Out</button>
              </form>
              <button type="button" class="btn btn-dark" data-bs-dismiss="modal">Cancel</button>
          </div>
      </div>
  </div>
</div>
