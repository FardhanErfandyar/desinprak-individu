@extends('layouts.main')

@include('layouts.navbar')

<section class="h-100 gradient-custom-2">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center">
        <div class="col col-lg-9 col-xl-8">
          <div class="card">
            <div class="rounded-top text-white d-flex flex-row gradient-background" style="height:200px;">
              <div class="ms-4 mt-5 d-flex flex-column" style="width: 150px;">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-profiles/avatar-1.webp"
                  alt="Generic placeholder image" class="img-fluid img-thumbnail mt-4 mb-2"
                  style="width: 150px; z-index: 1">
                  <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-warning" data-mdb-ripple-color="dark" style="z-index: 1; color: #F18821;">
                    Edit profile
                  </button>
              </div>
              <div class="ms-3" style="margin-top: 130px;">
                <h5>{{ Auth::user()->name }}</h5>
                <p>{{ Auth::user()->email }}</p>
              </div>
            </div>
            <div class="p-4 text-black bg-body-tertiary">
              <div class="d-flex justify-content-end text-center py-1 text-body">
                <div>
                  <p class="mb-1 h5">8</p>
                  <p class="small text-muted mb-0">Mata Kuliah Diambil</p>
                </div>
                <div class="px-3">
                  <p class="mb-1 h5">4</p>
                  <p class="small text-muted mb-0">Mata Kuliah Diselesaikan</p>
                </div>
                <div>
                  <p class="mb-1 h5">180</p>
                  <p class="small text-muted mb-0">Total Jam Belajar</p>
                </div>
              </div>
            </div>
            <div class="card-body p-4 text-black">
              <div class="mb-5 text-body">
                <p class="lead fw-normal mb-1">About</p>
                <div class="p-4 bg-body-tertiary">
                  <p class="font-italic mb-1">Mahasiswa Universitas Terbuka</p>
                  <p class="font-italic mb-1">Sedang mempelajari Ilmu Komputer</p>
                  <p class="font-italic mb-0">Berkelanjutan dalam pendidikan jarak jauh</p>
                </div>
              </div>
              <div class="d-flex justify-content-between align-items-center mb-4 text-body">
                <p class="lead fw-normal mb-0">Kelas Terbaru</p>
                <p class="mb-0"><a href="#!" class="text-muted">Tampilkan semua</a></p>
              </div>
              <div class="row g-2">
                <div class="col mb-2">
                  <div class="card">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(112).webp" alt="Mata Kuliah 1" class="card-img-top rounded-3">
                    <div class="card-body">
                      <h5 class="card-title">Pengantar Ilmu Komputer</h5>
                      <p class="card-text">Belajar tentang dasar-dasar ilmu komputer dan pengenalan berbagai konsep penting.</p>
                    </div>
                  </div>
                </div>
                <div class="col mb-2">
                  <div class="card">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(107).webp" alt="Mata Kuliah 2" class="card-img-top rounded-3">
                    <div class="card-body">
                      <h5 class="card-title">Dasar-dasar Pemrograman</h5>
                      <p class="card-text">Pelajari logika pemrograman dan bahasa pemrograman dasar.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row g-2">
                <div class="col">
                  <div class="card">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(108).webp" alt="Mata Kuliah 3" class="card-img-top rounded-3">
                    <div class="card-body">
                      <h5 class="card-title">Statistika Dasar</h5>
                      <p class="card-text">Memahami konsep dasar statistika yang diterapkan dalam ilmu komputer.</p>
                    </div>
                  </div>
                </div>
                <div class="col">
                  <div class="card">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Lightbox/Original/img%20(114).webp" alt="Mata Kuliah 4" class="card-img-top rounded-3">
                    <div class="card-body">
                      <h5 class="card-title">Sistem Basis Data</h5>
                      <p class="card-text">Dasar-dasar pengelolaan basis data dan SQL.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <style>
    .gradient-background {
      background: linear-gradient(to right, #F18821, #F1C21B);
      border-radius: 1rem 0 0 1rem;
      height: auto; 
    }
  </style>
