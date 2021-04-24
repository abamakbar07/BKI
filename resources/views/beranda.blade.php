@extends('layout/main', ['page' => 'Beranda'])

@section('content')
<!-- ------------------------------------------------------CAROUSEL------------------------------------------------- -->
<div id="Beranda" class="carousel slide embed-responsive-4by3" data-ride="carousel">
   <ul class="carousel-indicators">
      <li data-target="#Beranda" data-slide-to="0" class="active"></li>
      <li data-target="#Beranda" data-slide-to="1"></li>
   </ul>

   <div class="carousel-inner">
      <div class="carousel-item active">
         <img src="img/BERKAH KARYA INTERNASIONAL - Injection Machine.png" alt="BERKAH KARYA INTERNASIONAL - INJECTION MACHINE" width="100%" height="100%">
         <div class="carousel-caption">
            <h3>PRODUSEN PRODUK PLASTIK</h3>
            <p>Melayani kebutuhan konsumen terhadap berbagai macam pemakaian produk kemasan plastik.</p>
         </div>
      </div>
      <div class="carousel-item">
         <img src="img/BERKAH KARYA INTERNASIONAL - Aneka Jenis Produk.png" alt="BERKAH KARYA INTERNASIONAL - ANEKA JENIS PRODUK" width="100%" height="720px">
         <div class="carousel-caption">
            <h3>ANEKA CONTOH PRODUK</h3>
            <p>Tersedia berbagai macam variasi kemasan untuk kebutuhan plastik pelanggan.</p>
         </div>
      </div>
   </div>

   <!-- Left and right controls -->
   <a class="carousel-control-prev" href="#Beranda" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
   </a>
   <a class="carousel-control-next" href="#Beranda" data-slide="next">
      <span class="carousel-control-next-icon"></span>
   </a>
</div>

<!-- =============================================================================================================== -->
<!-- -------------------------------------------------------ABOUTME------------------------------------------------- -->
<section id="Tentang">
   <div class="container" style="margin-top:100px; margin-bottom: 100px;">
      <div class="row">
         <div class="col-md-6 text-center align-text-bottom" data-aos="fade-up" class="">
            <a href="" class="ini" style="text-align: center;">
               <img src="img/pabrik.png" class="gambarkosongimg">
            </a>
         </div>
         <div class="col-md-6">
            <div id="geserkiri1" class="row" data-aos="fade-up" style="margin:15px; margin-bottom: 0px;">
               <h1>Tentang Perusahaan</h1>
            </div>
            <div id="geserkiri2" class="row" data-aos="fade-up" style="margin:15px; margin-bottom: 0px;">
               <a>PT BERKAH KARYA INTERNASIONAL adalah sebuah perusahaan berskala menengah ke atas yang bergerak
                  dibidang Spesialisasi Kemasan Plastik.</a>
            </div>
            <div class="row" data-aos="fade-down" style="margin:15px; margin-bottom: 0px; margin-top: 50px;">
               <div class="col-md-12 text-center">
                  <a href="tentang-kami.php" class="btn btn-outline-primary">Click Me!</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<!-- =============================================================================================================== -->
<!-- ------------------------------------------------------PRODUKKAMI----------------------------------------------- -->
<!-- SVG untuk Gelombang -->
<section id="begelombang" class="inigelombang">
   <div class="gelombang">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1047.1 3.7" preserveAspectRatio="xMidYMin slice">
         <path class="elementor-shape-fill" d="M1047.1,0C557,0,8.9,0,0,0v1.6c0,0,0.6-1.5,2.7-0.3C3.9,2,6.1,4.1,8.3,3.5c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3C13.8,2,16,4.1,18.2,3.5c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3C23.6,2,25.9,4.1,28,3.5c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3C63,2,65.3,4.1,67.4,3.5 C68.3,3.3,69,1.6,69,1.6s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3 C82.7,2,85,4.1,87.1,3.5c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3C92.6,2,94.8,4.1,97,3.5c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.6-0.4V0z M2.5,1.2C2.5,1.2,2.5,1.2,2.5,1.2C2.5,1.2,2.5,1.2,2.5,1.2z M2.7,1.4c0.1,0,0.1,0.1,0.1,0.1C2.8,1.4,2.8,1.4,2.7,1.4z" />
      </svg>
   </div>
</section>

<section id="ProdukKami" class="prodkami" style="margin-top: px;">
   <div class="container" style="padding-bottom: 20px;">

      <div class="text-center text-white" style="padding-top: 50px;">
         <h1 style="font-weight: 750;">KEUNGGULAN KAMI</h1>
      </div>

      <div class="text-center text-white">
         <h5 style="font-weight: 450;">Berkah Karya Internasional sebagai pabrik plastik kemasan dengan beberapa
            keunggulan diantaranya adalah</h5>
      </div>

      <div class="row text-center text-white">
         <div class="col-md-4 text-center prodkami3col" data-aos="zoom-in">
            <img src="img/prodkami_1.png" alt="" width="350px" height="250px">
            <!-- <h1>GAMBAR #1</h1> -->
            <h2>KUALITAS PRODUK</h2>
            <div class="list-group text-left">
               <div class="list-group-item bg-transparent" style="border:white; height: 40px;"><span class="fa fa-chevron-right mr-2"></span>
                  Kualitas produk yang terjaga dengan baik karena didukung oleh karyawan yang berpengalaman dalam
                  bidangnya & peralatan yg memadai.
               </div>
               <div class="list-group-item bg-transparent" style="border:white; margin-bottom: -20px; margin-top: -20; height: 40px;">
                  <!-- <span class="fa fa-chevron-right mr-2"></span> -->
               </div>
               <div class="list-group-item bg-transparent" style="border:white; margin-bottom: -20px; margin-top: -20; height: 40px;">
                  <!-- <span class="fa fa-chevron-right mr-2"></span> -->
               </div>
               <div class="list-group-item bg-transparent" style="border:white; margin-bottom: -20px; margin-top: -20; height: 40px;">
                  <!-- <span class="fa fa-chevron-right mr-2"></span> -->
               </div>
            </div>
         </div>

         <div class="col-md-4 text-center prodkami3col" data-aos="zoom-in">
            <img src="img/prodkami_2.png" alt="" width="350px" height="250px">
            <!-- <h1>GAMBAR #2</h1> -->
            <h2>KECEPATAN</h2>
            <div class="list-group text-left">
               <div class="list-group-item bg-transparent" style="border:white; height: 40px;"><span class="fa fa-chevron-right mr-2"></span>
                  Dengan Management yang ramping sehingga membuat segalanya bisa dilakukan dengan cepat dari mulai
                  Pengembangan produk baru sampai dengan penanganan Keluhan Pelanggan.
               </div>
               <div class="list-group-item bg-transparent" style="border:white; margin-bottom: -20px; margin-top: -20; height: 40px;">
                  <!-- <span class="fa fa-chevron-right mr-2"></span> -->
               </div>
               <div class="list-group-item bg-transparent" style="border:white; margin-bottom: -20px; margin-top: -20; height: 40px;">
                  <!-- <span class="fa fa-chevron-right mr-2"></span> -->
               </div>
               <div class="list-group-item bg-transparent" style="border:white; margin-bottom: -20px; margin-top: -20; height: 40px;">
                  <!-- <span class="fa fa-chevron-right mr-2"></span> -->
               </div>
            </div>
         </div>

         <div class="col-md-4 text-center prodkami3col" data-aos="zoom-in">
            <img src="img/prodkami_3.png" alt="" width="350px" height="250px">
            <!-- <h1>GAMBAR #3</h1> -->
            <h2>HARGA KOMPETITIF</h2>
            <div class="list-group text-left">
               <div class="list-group-item bg-transparent" style="border:white; height: 40px;"><span class="fa fa-chevron-right mr-2"></span>
                  Produk-produk dengan jumlah yang kecil masih bisa dijalankan dengan harga yg sangat kompentitif.
               </div>
               <div class="list-group-item bg-transparent" style="border:white; margin-bottom: -20px; margin-top: -20; height: 40px;">
                  <!-- <span class="fa fa-chevron-right mr-2"></span> -->
               </div>
               <div class="list-group-item bg-transparent" style="border:white; margin-bottom: -20px; margin-top: -20; height: 40px;">
                  <!-- <span class="fa fa-chevron-right mr-2"></span> -->
               </div>
               <div class="list-group-item bg-transparent" style="border:white; margin-bottom: -20px; margin-top: -20; height: 40px;">
                  <!-- <span class="fa fa-chevron-right mr-2"></span> -->
               </div>
            </div>
         </div>
      </div>
   </div>

</section>

<!-- =============================================================================================================== -->
<!-- ---------------------------------------------------------NEWS-------------------------------------------------- -->
<section class="ftco-section testimony-section ftco-no-pb">
   <div class="img img-bg" data-stellar-background-ratio="0.5"></div>
   <div class="container">
      <div class="row justify-content-center mb-5">
         <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
            <span class="subheading"></span>
            <h3 class="mb-0" style="padding-top: 20px;">CUSTOMER KAMI</h3>
         </div>
      </div>
      <div class="row ftco-animate">
         <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">

               <div class="item">
                  <div class="testimony-wrap py-4 text-center">
                     <a href="#">
                        <img src="https://xccleanindo.com/static/img/logo.jpg">
                        <!-- <div class="yeuh">
                          <h6>This is what distinguishes Gunung Maja plastic jerry cans from others.</h6>
                          <h6 class="font-weight-light">Oktober 31, 2020</h6>
                        </div> -->
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap py-4 text-center">
                     <a href="#">
                        <img src="http://jadimedika.com/wp-content/uploads/2020/02/JAM-LOGO-Transparant.png">
                        <!-- <div class="yeuh">
                          <h6>Here's The Right Choice For Plastic Jerry Cans.</h6>
                          <h6 class="font-weight-light">Oktober 31, 2020</h6>
                        </div> -->
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap py-4 text-center">
                     <a href="#">
                        <img src="https://www.kino.co.id/assets/img/kino.png">
                        <!-- <div class="yeuh">
                          <h6>Reasons To Use Food Grade Plastic For Plastic Bottles And Jerry Cans.</h6>
                          <h6 class="font-weight-light">Oktober 31, 2020</h6>
                        </div> -->
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap py-4 text-center">
                     <a href="#">
                        <img src="http://www.ikapharmindo.com/wp-content/themes/chris-bootstrap/images/logo.png">
                        <!-- <div class="yeuh">
                          <h6>Reasons To Use Food Grade Plastic For Plastic Bottles And Jerry Cans.</h6>
                          <h6 class="font-weight-light">Oktober 31, 2020</h6>
                        </div> -->
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap py-4 text-center ">
                     <a href="#">
                        <img src="https://www.akashainternational.com/wp-content/uploads/2018/07/cropped-logo-baru1.png">
                        <!-- <div class="yeuh">
                          <h6>Reasons To Use Food Grade Plastic For Plastic Bottles And Jerry Cans.</h6>
                          <h6 class="font-weight-light">Oktober 31, 2020</h6>
                        </div> -->
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap py-4 text-center">
                     <a href="#">
                        <img src="https://makarizo.com/wp-content/uploads/2020/07/logo-makarizo-white.png" style="filter: invert();">
                        <!-- <div class="yeuh">
                          <h6>Reasons To Use Food Grade Plastic For Plastic Bottles And Jerry Cans.</h6>
                          <h6 class="font-weight-light">Oktober 31, 2020</h6>
                        </div> -->
                     </a>
                  </div>
               </div>
               <div class="item">
                  <div class="testimony-wrap py-4 text-center">
                     <a href="#">
                        <img src="https://vci.co.id/wp-content/uploads/2020/07/Logo-vci.png" height="150px">
                        <!-- <div class="yeuh">
                          <h6>Reasons To Use Food Grade Plastic For Plastic Bottles And Jerry Cans.</h6>
                          <h6 class="font-weight-light">Oktober 31, 2020</h6>
                        </div> -->
                     </a>
                  </div>
               </div>

            </div>
            <div class="text-center" data-aos="zoom-in">
               <a href="customer.php" class="btn btn-outline-primary">Selengkapnya ></a>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- =============================================================================================================== -->
<!-- ----------------------------------------------------PRODUK LAINNYA--------------------------------------------- -->
<!-- SVG untuk Gelombang -->
<section id="begelombang" class="inigelombang prodkami">
   <div class="gelombang">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1047.1 3.7" preserveAspectRatio="xMidYMin slice">
         <path class="elementor-shape-fill" d="M1047.1,0C557,0,8.9,0,0,0v1.6c0,0,0.6-1.5,2.7-0.3C3.9,2,6.1,4.1,8.3,3.5c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3C13.8,2,16,4.1,18.2,3.5c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3C23.6,2,25.9,4.1,28,3.5c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3C63,2,65.3,4.1,67.4,3.5 C68.3,3.3,69,1.6,69,1.6s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3 C82.7,2,85,4.1,87.1,3.5c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3C92.6,2,94.8,4.1,97,3.5c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9 c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9c0,0,0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2 c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.7-0.3 c1.2,0.7,3.5,2.8,5.6,2.2c0.9-0.2,1.5-1.9,1.5-1.9s0.6-1.5,2.6-0.4V0z M2.5,1.2C2.5,1.2,2.5,1.2,2.5,1.2C2.5,1.2,2.5,1.2,2.5,1.2z M2.7,1.4c0.1,0,0.1,0.1,0.1,0.1C2.8,1.4,2.8,1.4,2.7,1.4z" />
      </svg>
   </div>
   <!-- <div class="container"> -->
   <div class="text-center text-white">
      <h1 style="font-weight: 750;">PRODUK KAMI</h1>
   </div>
   <hr class="hijau">
</section>

<section>
   <div class="container" style="margin-top:20px ;">
      <div class="row">
         <div class="col-md-3 katalog zoomIn">
            <a href="produk#subprod1">
               <img src="img/produk/BOTOL JERIGEN 1LITER A.PNG" alt="Botol Jerigen" class="katalogimg">
               <div class="overlay">
                  <div class="katalogtext">Botol Jerigen</div>
               </div>
            </a>
         </div>

         <div class="col-md-3 katalog zoomIn">
            <a href="produk#subprod2">
               <img src="img/produk/BOTOL PET 100ML NECK 24MM.PNG" alt="Botol PET" class="katalogimg">
               <div class="overlay">
                  <div class="katalogtext">Botol PET</div>
               </div>
            </a>
         </div>

         <div class="col-md-3 katalog zoomIn">
            <a href="produk#subprod3">
               <img src="img/produk/SPRAY PUMP 20410.PNG" alt="Cap" class="katalogimg">
               <div class="overlay">
                  <div class="katalogtext">Pump</div>
               </div>
            </a>
         </div>

         <div class="col-md-3 katalog zoomIn">
            <a href="produk#subprod4">
               <img src="img/produk/CAP NECK 28MM 28415.PNG" alt="Pump" class="katalogimg">
               <div class="overlay">
                  <div class="katalogtext">Cap</div>
               </div>
            </a>
         </div>
      </div>
      <div class="text-center" data-aos="zoom-in" style="padding-top: 10px;">
         <a href="produk" class="btn btn-outline-primary">Lainnya ></a>
      </div>

</section>

<!-- <section id="ProdukLainnya" class="prodkami" style="padding-top: 20px;">
    <div class="container">
      <div class="text-center text-white">
        <h1 style="font-weight: 750;">PRODUK KAMI LAINNYA</h1>
      </div>
      <hr>
    </div>

</section> -->
@endsection