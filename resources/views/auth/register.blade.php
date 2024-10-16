@extends('layouts.main')

@section('content')
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card shadow-lg" style="border-radius: 1rem;">
          <div class="row d-flex align-items-stretch">
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <h2 class="fw-bold mb-4" style="color: #F18821">Registrasi</h2>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="form-outline mb-4">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control form-control-lg" name="name" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control form-control-lg" name="email" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control form-control-lg" name="password" required>
                    </div>
                    <div class="form-outline mb-4">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control form-control-lg" name="password_confirmation" required>
                    </div>
                    <div class="pt-1 mb-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
                    </div>
                    <p class="mb-3" style="color: #393f81;">Sudah punya akun? <a href="{{ route('login') }}" style="color: #393f81;">Masuk di sini</a></p>
                </form>

              </div>
            </div>
            <div class="col-md-6 col-lg-5 d-none d-md-block gradient-background d-flex flex-column justify-content-end">
              <a href="/">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="img-fluid mt-5" style="width: 70%; margin: 20px auto; display: block;" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('layouts.footer')

<style>
  .gradient-background {
    background: linear-gradient(to bottom, #F18821, #F1C21B, #ffffff); 
    border-radius: 0 1rem 1rem 0; 
    min-height: 80vh; 
    height: auto; 
  }
</style>

@endsection

