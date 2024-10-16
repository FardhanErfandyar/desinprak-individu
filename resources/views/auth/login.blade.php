@extends('layouts.main')

@section('content')
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card shadow-lg" style="border-radius: 1rem;"> 
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block gradient-background">
              <a href="/">
                <img src="{{ asset('images/logo.svg') }}" alt="Logo" class="img-fluid mt-5" style="width: 70%; margin: 20px auto; display: block;" />
              </a>
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="{{ route('login') }}" method="POST">
                  @csrf

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <span class="h1 fw-bold" style="color: #F18821">Login</span>
                  </div>
                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form2Example17">Email</label>
                    <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" required />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <label class="form-label" for="form2Example27">Password</label>
                    <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" required />
                  </div>

                  <div class="pt-1 mb-4">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
                  </div>
                  
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Belum punya akun? <a href="{{ route('register') }}" style="color: #393f81;">Register di sini</a></p>
                </form>

              </div>
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
    border-radius: 1rem 0 0 1rem;
    min-height: 80vh; 
    height: auto; 
  }
</style>

@endsection
