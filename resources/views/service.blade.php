@extends('layouts.header')
@include('layouts.navbar')

<!-- ======= Services Section ======= -->
<section id="services" class="services">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Pelayanan Kami</h2>
        <p>Berikut adalah fitur fitur yang tersedia dan dapat anda gunakan dalam aplikasi Meet Up</p>
      </div>

      <div class="row gy-5">

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
          <div class="service-item">
            <div class="img">
              <img src="assets/img/services-1.jpg" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-activity"></i>
              </div>
              <a href="jadwalRapat" class="stretched-link">
                <h3>Jadwal rapat</h3>
              </a>
              <p>Fitur yang menampilkan beberapa jadwal rapat terkini.</p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
          <div class="service-item">
            <div class="img">
              <img src="assets/img/services-2.jpg" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-broadcast"></i>
              </div>
              <a href="buatRapat" class="stretched-link">
                <h3>Buat Rapat</h3>
              </a>
              <p>Buat jadwal rapat anda disini. </p>
            </div>
          </div>
        </div><!-- End Service Item -->

        <div class="col-xl-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
          <div class="service-item">
            <div class="img">
              <img src="assets/img/services-6.jpg" class="img-fluid" alt="">
            </div>
            <div class="details position-relative">
              <div class="icon">
                <i class="bi bi-easel"></i>
              </div>
              <a href="#" class="stretched-link">
                <h3>Arsip Rapat</h3>
              </a>
              <p>Fitur yang menampilkan arsipan dari rapat</p>
            </div>
          </div>
        </div><!-- End Service Item -->
    </section>

@include('layouts.footer')
