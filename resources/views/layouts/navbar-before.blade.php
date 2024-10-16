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
          <a class="nav-link fw-semibold" id="link-home" href="#beranda">Beranda</a>
      </li>
      <li class="nav-item">
          <a class="nav-link fw-semibold" id="link-paket" href="#paketKelas">Paket Kelas</a>
      </li>
      <li class="nav-item">
          <a class="nav-link fw-semibold" id="link-tentang" href="#tentang-bimbel">Tentang Bimbel</a>
      </li>
      </ul>
    </div>

    <!-- Search Bar and Login Button -->
    <div class="d-flex mt-3"> 
      <form class="d-flex me-2">
        <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search" style="max-width: 200px;">
      </form>
      <a href="/login" class="btn btn-primary mb-3 rounded align-self-center">Login</a>
    </div>

  </div>
</nav>
