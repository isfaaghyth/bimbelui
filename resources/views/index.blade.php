@extends('layouts.app')

@section('content')

<!-- Hero Section
================================================== -->

<header class="jumbotron bg-inverse text-xs-center center-vertically" role="banner">
  <div class="container">
     <br>
    <h3>Jaminan Masuk <b>UI</b> dan PTN Favorit Lainnya</h3>
    <h2 class="m-b-3">100% <em>Uang kembali</em>, di <a href="#" class="jumbolink">bimbelui.com</a>.</h2>
    <a class="btn btn-secondary-outline m-b-1" href="#" role="button">DAFTAR SEKARANG</a>
    <ul class="nav nav-inline social-share">
      <li class="nav-item"><a class="nav-link" href="#"><span class="icon-twitter"></span> 1024</a></li>
      <li class="nav-item"><a class="nav-link" href="#"><span class="icon-facebook"></span> 562</a></li>
    </ul>
  </div>
</header>

<!-- Intro
================================================== -->

<div id="tentang-kami">
  <section class="section-intro bg-faded text-xs-center">
    <div class="container">
      <h3 class="wp wp-1">FReS-TA</h3>
      <p class="lead wp wp-2">Selamat datang di Lembaga Pendidikan yang didirikan dan dikelola oleh alumni sekaligus dosen Fakultas Ekonomi Universitas Indonesia (FE-UI) dan Fakultas Hukum Universitas Indonesia (FH-UI). Kami bergerak dan fokus pada pendidikan dan pengembangan sumber daya manusia sehingga bisa menjadi manusia yang unggul dan berkarakter.</p>
      <img src="http://stptower.com/wp-content/uploads/peta-indonesia.png" alt="Indonesia" class="img-fluid wp wp-3">
    </div>
  </section>
</div>

<!-- Features
================================================== -->

<section class="section-features text-xs-center">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-block">
            <span class="icon-pen display-1"></span>
            <h4 class="card-title">Tenaga Pengajar</h4>
            <h6 class="card-subtitle text-muted">Feedback</h6>
            <p class="card-text">Dosen, Asisten, Staf Pengajar UI, dan penulis buku "jawaban soal simak UI" serta guru-guru terbaik.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-block">
            <span class="icon-thunderbolt display-1"></span>
            <h4 class="card-title">Psikologi</h4>
            <h6 class="card-subtitle text-muted">Feedback</h6>
            <p class="card-text">Membantu siswa menyelesaikan masalah-masalah siswa dan menggali potensi siswa.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card m-b-0">
          <div class="card-block">
            <span class="icon-heart display-1"></span>
            <h4 class="card-title">Motivator</h4>
            <h6 class="card-subtitle text-muted">Feedback</h6>
            <p class="card-text">Memacu semangat siswa dalam hal belajar dan mencapai cita-citanya..</p>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="row">
      <div class="col-md-4">
        <div class="card">
          <div class="card-block">
            <span class="icon-user display-1"></span>
            <h4 class="card-title">Rohaniwan</h4>
            <h6 class="card-subtitle text-muted">Feedback</h6>
            <p class="card-text">Memberikan kesejukan dan kedamaian hati siswa.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-block">
            <span class="icon-tag display-1"></span>
            <h4 class="card-title">Mentor Pendidik</h4>
            <h6 class="card-subtitle text-muted">Feedback</h6>
            <p class="card-text">Membantu dan mendampingi siswa dalam belajar.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card m-b-0">
          <div class="card-block">
            <span class="icon-sketch display-1"></span>
            <h4 class="card-title">EQ dan SQ Power</h4>
            <h6 class="card-subtitle text-muted">Feedback</h6>
            <p class="card-text">Yang mampu membangkitkan kecerdasan emosional dan spiritual peserta serta mengelola emosi siswa dengan baik agar kondisi emosi dan fisik siswa baik.</p>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</section>

<!-- Video
================================================== -->

<!-- <section class="section-video bg-inverse text-xs-center wp wp-4">
  <h3 class="sr-only">Video</h3>
  <video id="demo_video" class="video-js vjs-default-skin vjs-big-play-centered" controls poster="img/video-poster.jpg" data-setup='{}'>
    <source src="http://vjs.zencdn.net/v/oceans.mp4" type='video/mp4'>
    <source src="http://vjs.zencdn.net/v/oceans.webm" type='video/webm'>
  </video>
</section> -->

<!-- Pricing
================================================== -->

<section class="section-pricing bg-faded text-xs-center">
  <div class="container">
    <h3>Pilihan Paket</h3>
    <div class="row p-y-3">
      <div class="col-md-4 p-t-md wp wp-5">
        <div class="card pricing-box">
          <div class="card-header text-uppercase">
            Hemat
          </div>
          <div class="card-block">
            <!-- <p class="card-title">Paket hemat.</p> -->
            <h4 class="card-text">
              <sup class="pricing-box-currency">$</sup>
              <span class="pricing-box-price">19</span>
              <small class="text-muted text-uppercase">/month</small>
            </h4>
          </div>
          <ul class="list-group list-group-flush p-x">
            <li class="list-group-item">Belajar intensif</li>
            <li class="list-group-item">Modul pelajaran</li>
          </ul>
          <a href="#" class="btn btn-primary-outline">Daftar Sekarang</a>
        </div>
      </div>
      <div class="col-md-4 stacking-top">
        <div class="card pricing-box pricing-best p-x-0">
          <div class="card-header text-uppercase">
            Komplit
          </div>
          <div class="card-block">
            <h4 class="card-text">
              <sup class="pricing-box-currency">$</sup>
              <span class="pricing-box-price">49</span>
              <small class="text-muted text-uppercase">/month</small>
            </h4>
          </div>
          <ul class="list-group list-group-flush p-x">
            <li class="list-group-item">Belajar intensif</li>
            <li class="list-group-item">Modul pelajaran</li>
            <li class="list-group-item">Asrama menjelang SBMPTN/SIMAK-UI</li>
            <li class="list-group-item">Konsultasi</li>
          </ul>
          <a href="#" class="btn btn-primary-outline">Daftar Sekarang</a>
        </div>
      </div>
      <div class="col-md-4 p-t-md wp wp-6">
        <div class="card pricing-box">
          <div class="card-header text-uppercase">
            Biasa
          </div>
          <div class="card-block">
            <h4 class="card-text">
              <sup class="pricing-box-currency">$</sup>
              <span class="pricing-box-price">29</span>
              <small class="text-muted text-uppercase">/month</small>
            </h4>
          </div>
          <ul class="list-group list-group-flush p-x">
            <li class="list-group-item">Belajar Intensif</li>
            <li class="list-group-item">Modul pelajaran</li>
            <li class="list-group-item">Konsultasi</li>
          </ul>
          <a href="#" class="btn btn-primary-outline">Daftar Sekarang</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials
================================================== -->

<section class="section-testimonials text-xs-center bg-inverse">
  <div class="container">
    <h3 class="sr-only">Testimonials</h3>
    <div id="carousel-testimonials" class="carousel slide" data-ride="carousel" data-interval="0">
      <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
          <blockquote class="blockquote">
            <img src="img/testimoni1.png" height="80" width="80" alt="Avatar" class="img-circle">
            <p class="h6">FReS-TA top banget!!! FReS-TA gak cuman ngajarin soal pelajaran doang, tapi juga soal kekeluargaan, persahabatan, dan spiritual. Di sini, sistem belajar juga bisa ditentukan sendiri. Yang senang belajar kelompok, silakan belajar kelompok! Yang senang belajar mandiri, silakan belajar mandiri! Yang butuh pendamping, FReS-TA selalu menyediakan! So, mau lulus SPMB plus dapet plus plus lainnya?? Ikut FReS-TA! Ga akan nyesel!!!"</p>
            <footer>IRNA CECILIA-SMU SANTA URSULA - FK UI.</footer>
          </blockquote>
        </div>
        <div class="carousel-item">
          <blockquote class="blockquote">
            <img src="img/testimoni2.png" height="80" width="80" alt="Avatar" class="img-circle">
            <p class="h6">FReS-TA tuh TOP bgd.. selain ngajrin ttg SPMB tp juga dapat meningkatkn keimanan, temen2 baruuu yg asiiiik bgd dan percaya diri kita... jadi kita bisa menjadii manusia yg lebih baiiik.... bkin ak kgn ma FReS-TA 07.. </p>
            <footer>HERVITA WAHYUNI-SMUN - FK UI</footer>
          </blockquote>
        </div>
        <div class="carousel-item">
          <blockquote class="blockquote">
            <img src="img/testimoni3.png" height="80" width="80" alt="Avatar" class="img-circle">
            <p class="h6">Di FReS-TA, kita ga cuma diajarin pelajaran tapi juga trik-trik spmb. yang pasti fres-ta udah ngebantu aku untuk wujudin cita-citaku dan jadi kebanggaan orang tua. thank's FReS-TA.</p>
            <footer>ARUB KHARISMA-SMUN - FH UI</footer>
          </blockquote>
        </div>
        <div class="carousel-item">
          <blockquote class="blockquote">
            <img src="img/testimoni4.png" height="80" width="80" alt="Avatar" class="img-circle">
            <p class="h6">Di FReS-TA seru, dapet pelajaran yang menarik, dapet temen2 baru juga yg ternyata seru2, trs bisa belajar sampe malem banget sampe bisa ngerti semua materi2 yang bakalan keluar</p>
            <footer>MUHAMMAD FAISAL - AKUNTANSI UI</footer>
          </blockquote>
      </div>
      </div>
      <ol class="carousel-indicators">
        <li class="active"><img src="img/testimoni1.png" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="0" class="img-fluid img-circle"></li>
        <li><img src="img/testimoni2.png" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="1" class="img-fluid img-circle"></li>
        <li><img src="img/testimoni3.png" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="2" class="img-fluid img-circle"></li>
        <li><img src="img/testimoni4.png" alt="Navigation avatar" data-target="#carousel-testimonials" data-slide-to="3" class="img-fluid img-circle"></li>
      </ol>
    </div>
  </div>
</section>

<!-- Text Content
================================================== -->

<section class="section-text">
  <div class="container">
    <h3 class="text-xs-center">BIMBEL-UI Lulus 100%*</h3>
    <div class="row p-y-3">
      <div class="col-md-4">
         <center>
            <div class="card-block">
              <h4 class="card-title">82%</h4>
              <h6 class="card-subtitle text-muted">graduation</h6>
              <p class="card-text">Tingkat Kelulusan di 2014</p>
            </div>
         </center>
        <!-- <p class="wp wp-7">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p> -->
      </div>
      <div class="col-md-4">
         <center>
            <div class="card-block">
              <h4 class="card-title">702</h4>
              <h6 class="card-subtitle text-muted">alumni</h6>
              <p class="card-text">Alumnus bimbelui.com</p>
            </div>
         </center>
        <!-- <p class="wp wp-8">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p> -->
      </div>
      <div class="col-md-4">
         <center>
            <div class="card-block">
              <h4 class="card-title">10</h4>
              <h6 class="card-subtitle text-muted">year</h6>
              <p class="card-text">10 tahun berpengalaman</p>
            </div>
         </center>
        <!-- <p class="wp wp-8">A posuere donec senectus suspendisse bibendum magna ridiculus a justo orci parturient suspendisse ad rhoncus cursus ut parturient viverra elit aliquam ultrices est sem. Tellus nam ad fermentum ac enim est duis facilisis congue a lacus adipiscing consequat risus consectetur scelerisque integer suspendisse a mus integer elit massa ut.</p> -->
      </div>
    </div>
  </div>
</section>

<!-- News
================================================== -->

<section class="section-news">
  <div class="container">
    <h3 class="text-xs-center">Program Eksklusif</h3>
    <h3 class="sr-only">Program Ekstensi dan Pascasarjana</h3>
    <div class="row">
      <div class="col-md-6">
         <center>
             <div class="card-block">
                <figure class="has-light-mask m-b-0 image-effect">
                  <img src="http://bimbelui.com/media/pasca.jpg" alt="Article thumbnail" class="img-fluid">
                </figure>
                <br>
              <h4 class="card-title">Program Pascasarjana</h4>
              <h6 class="card-subtitle text-muted">exclusive program</h6>
             </div>
         </center>
      </div>
      <div class="col-md-6">
         <center>
             <div class="card-block">
                <figure class="has-light-mask m-b-0 image-effect">
                  <img src="http://bimbelui.com/media/ekstensi.jpg" alt="Article thumbnail" class="img-fluid">
                </figure>
                <br>
              <h4 class="card-title">Program Ekstensi</h4>
              <h6 class="card-subtitle text-muted">exclusive program</h6>
             </div>
         </center>
      </div>
    </div>
  </div>
</section>

@endsection
