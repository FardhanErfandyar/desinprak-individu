<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bimbel Kelas Online - @yield('title')</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
</head>
<body>



<!-- Hero Section -->
@yield('hero')

<!-- Main Content -->
  @yield('content')

<!-- Footer Section -->
<footer class="py-4 mx-auto mt-5">
    <div class="container">
        <div class="row mt-5">
            <!-- Kolom Pertama: Logo -->
            <div class="col-md-6 text-center mt-2">
                <img src="{{ asset('images/logo.svg') }}" alt="Bimbel Logo" class="img-fluid" style="max-width: 300px;">
            </div>

            <!-- Kolom Kedua: Hubungi Kami -->
            <div class="col-md-3 text-start">
                <h5>Hubungi Kami</h5>
                <p>0812-9397-2260</p>
                <p>0882-1199-2101</p>   
                <p>bimbelkelasonline@gmail.com</p>
            </div>

            <!-- Kolom Ketiga: Info Lebih Lanjut -->
            <div class="col-md-3 text-start">
                <h5>Info Lebih Lanjut</h5>
                <p>FAQ</p>
                <p>Kontak</p>
                <p>Syarat dan Ketentuan</p>
                <p>Kebijakan Privasi</p>
            </div>
        </div>

        <!-- Row Baru untuk Copyright -->
        <div class="row mt-4 text-center">
            <div class="col">
                <p>&copy; 2024 Bimbel Kelas Online. All Rights Reserved</p>
                <p>Hubungi Kami: 0812-9397-2260</p>
            </div>
        </div>
    </div>
</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

{{-- navbar js --}}
<script src="{{ asset('js/navbar.js') }}"></script>

</body>
</html>
