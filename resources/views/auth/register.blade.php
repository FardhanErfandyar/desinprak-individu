@extends('layouts.main')

@section('content')
<section class="vh-100">
  <div class="container py-5 h-100 mb-5">
    <div class="row d-flex justify-content-center align-items-center h-100 mb-5">
      <div class="col col-xl-10 mb-5">
        <div class="card shadow-lg min-height: 400px; " style="border-radius: 1rem;"> 
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img2.webp"
                alt="register form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <h2 class="fw-bold mb-4">Registrasi</h2>
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
                        <button type="submit" class="btn btn-dark btn-lg btn-block">Daftar</button>
                    </div>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Sudah punya akun? <a href="{{ route('login') }}" style="color: #393f81;">Masuk di sini</a></p>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
