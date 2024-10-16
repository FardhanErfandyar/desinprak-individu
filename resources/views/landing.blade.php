
<!-- Header Section -->


@extends('layouts.main')

@include('layouts.navbar-before')

<div></div>
@section('title', 'Landing Page')

@section('hero')
<div class="hero text-center mt-3" id="beranda">
  <div class="row align-items-center">
    <!-- Kolom Gambar -->
    <div class="ms-5 col-md-5">
      <img src="{{ asset('images/person-learning.png') }}" alt="Learning Image" class="img-fluid">
    </div>
    
    <!-- Kolom Teks -->
    <div class="col-md-6 text-start mt-n5"> 
        <h3>Kesulitan <span>Belajar?</span></h3>
        <h1 class="fw-bold">Gabung <span>Kelas</span> <br> <span>Online</span> Aja!</h1>
        <a href="#" class="btn btn-cta mt-2">Gabung Sekarang</a>
    </div>
  </div>
</div>
@endsection



@section('content')
<!-- Welcoming Session Section -->
<div class="welcoming-session my-5 me-5 ms-5" style="background-color: #F18821; padding: 20px; border-radius: 20px">
    <div class="container">
      <div class="row align-items-center">
        <!-- Kolom Iframe -->
        <div class="col-md-6 text-center py-3">
            <iframe style="border-radius: 10px" width="560" height="315" src="https://www.youtube.com/embed/VorHqkQj5Vo?si=zDBoOJodm2SCTJpu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
        
        <!-- Kolom Teks -->
        <div class=" text-light col-md-6 text-start">
          <h2>Welcoming Session #8</h2>
          <p>Welcoming Session adalah orientasi pengenalan br
            sistem kuliah di UT dan sistem belajar Bimbel Kelas 
            Online kepada para peserta Bimbel agar lebih memahami tips 
            trik belajar dengan baik dan efisien selama kuliah di UT.</p>
        </div>
      </div>
    </div>
  </div>
  

<!-- Package Section -->
<div class="package-section py-5 me-5 ms-5" id="paketKelas">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Paket Kelas</h2>
        <p class="text-muted">Temukan paket Kelas terbaik yang sesuai dengan kebutuhan Anda!</p> 
    </div>
    <div class="row text-center">
        <div class="col-md-6">
            <div class="package-card shadow-lg"> 
                <img src="{{ asset('images/course.jpg') }}" alt="Paket SIPAS" class="img-fluid mb-3 package-image rounded">
                <h3 class="fw-semibold">Paket SIPAS</h3>
                <p class="price">Rp. 199.000 <br><span class="text-muted"><del>Rp. 220.000</del></span> / Semester</p>
                <a href="#" class="btn btn-primary mt-2">Daftar Sekarang</a> 
            </div>
        </div>
        <div class="col-md-6">
            <div class="package-card shadow-lg"> 
                <img src="{{ asset('images/course1.jpg') }}" alt="Paket Custom" class="img-fluid mb-3 package-image rounded">
                <h3 class="fw-semibold">Paket Custom</h3>
                <p class="price">Rp. 59.000 <br><span class="text-muted"><del>Rp. 79.000</del></span> / Mata Kuliah</p>
                <a href="#" class="btn btn-primary mt-2">Daftar Sekarang</a> 
            </div>
        </div>
    </div>
</div>

  

<!-- About Section -->
<div class="about-section rounded mt-5 ms-5 me-5" id="tentang-bimbel">
    <div style="border: 3px solid white; padding: 20px; border-radius: 10px;">
        <h2>Tentang Bimbel</h2>
        <p>Kelas Online hadir sejak pertengahan tahun 2020 dalam membantu mahasiswa UT menjalani perkuliahan untuk memahami materi. Kami menyediakan berbagai paket kelas yang dirancang khusus untuk memenuhi kebutuhan belajar mahasiswa, dengan metode pengajaran yang interaktif dan mudah dipahami. Setiap sesi diajarkan oleh pengajar yang berpengalaman di bidangnya, sehingga peserta dapat belajar dengan efektif. Selain itu, kami juga menyediakan akses ke berbagai sumber belajar digital dan forum diskusi untuk mendukung proses belajar. Dengan mengikuti kelas online ini, mahasiswa diharapkan dapat meningkatkan pemahaman mereka terhadap materi kuliah dan mencapai tujuan akademis mereka dengan lebih baik.</p>
    </div>
</div>


<div class="container py-5">
    <div class="row justify-content-center text-center">
        <img src="{{ asset('images/logo.png') }}" alt="Bimbel Logo" class="img-fluid" style="max-width: 500px;">
        <p class="mt-3">Terdaftar sebagai Badan Hukum sah di Kemenkumham 
            RI dengan sertifikat nomor AHU-041304.AH.01.30.Tahun 2024. 
            Bimbingan belajar (bimbel) Kelas Online hadir sebagai solusimu untuk 
            membantu memahami materi berbagai mata kuliah yang awalnya terlihat susah, menjadi terasa lebih mudah!</p>
    </div>
</div>


@endsection
