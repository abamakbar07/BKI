@extends('layout/main', ['page' => 'Produk'])

@section('content')
   <?php include 'db.php' ?>
   <section class="et-hero-tabs">
      <!-- <h1>STICKY SLIDER NAV</h1>
  <h3>Sliding content with sticky tab nav</h3> -->
   </section>
   <div id="hero" class="et-hero-tabs-container prod-navigation text-center">
      <a class="et-hero-tab" href="#subprod1">BOTOL JERIGEN</a>
      <a class="et-hero-tab" href="#subprod2">BOTOL PET</a>
      <a class="et-hero-tab" href="#subprod3">PUMP</a>
      <a class="et-hero-tab" href="#subprod4">CAP</a>
      <!-- <a class="et-hero-tab" href="#tab-other">Other</a> -->
      <span class="et-hero-tab-slider"></span>
   </div>

   <section id="subprod1" class="ftco-section testimony-section ftco-no-pb prod-section">
      <div class="img img-bg" style="background-image: url(images/bg_home.jpg);" data-stellar-background-ratio="0.5">
      </div>
      <div class="overlay"></div>
      <div class="container" style="padding-bottom: 5px;">
         <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
               <span class="subheading"></span>
               <h3 id="botoljerigen" class="mb-0 judul-produk">BOTOL JERIGEN</h3>
            </div>
         </div>

         <div class="row ftco-animate">
            <div class="col-md-12">
               <div class="carousel-testimony owl-carousel ftco-owl">

                  <?php foreach ($arrbotol as $nmbotol) : ?>
                  <div class="item">
                     <div class="testimony-wrap py-4 text-center">
                        <a
                           href="produkDetil?index=<?= $nmbotol["index"] ?>&jenis=<?= $nmbotol["jenis"]; ?>&nama=<?= $nmbotol["nama"]; ?>&proses=<?= $nmbotol["proses"] ?>&berat=<?= $nmbotol["berat"] ?>&cycle=<?= $nmbotol["cycle"] ?>&gambar=<?= $nmbotol["gambar"] ?>">
                           <img class="listproduk" src="img/produk/<?= $nmbotol["gambar"] ?>">
                           <div class="yeuh">
                              <h6><?= $nmbotol["nama"] ?></h6>
                              <h6 class="font-weight-light">-</h6>
                           </div>
                        </a>
                     </div>
                  </div>
                  <?php endforeach; ?>

               </div>
            </div>
         </div>

      </div>
   </section>

   <section id="subprod2" class="ftco-section testimony-section ftco-no-pb prod-section">
      <div class="img img-bg" style="background-image: url(images/bg_home.jpg);" data-stellar-background-ratio="0.5">
      </div>
      <div class="overlay"></div>
      <div class="container" style="padding-bottom: 0px;">
         <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
               <span class="subheading"></span>
               <h3 class="mb-0 judul-produk">BOTOL PET</h3>
            </div>
         </div>
         <div class="row ftco-animate">
            <div class="col-md-12">
               <div class="carousel-testimony owl-carousel ftco-owl">

                  <?php foreach ($arrpet as $nmpet) : ?>
                  <div class="item">
                     <div class="testimony-wrap py-4 text-center">
                        <a
                           href="produkDetil?index=<?= $nmpet["index"] ?>&jenis=<?= $nmpet["jenis"]; ?>&nama=<?= $nmpet["nama"]; ?>&proses=<?= $nmpet["proses"] ?>&berat=<?= $nmpet["berat"] ?>&cycle=<?= $nmpet["cycle"] ?>&gambar=<?= $nmpet["gambar"] ?>">
                           <img class="listproduk" src="img/produk/<?= $nmpet["gambar"] ?>">
                           <div class="yeuh">
                              <h6><?= $nmpet["nama"] ?></h6>
                              <h6 class="font-weight-light">-</h6>
                           </div>
                        </a>
                     </div>
                  </div>
                  <?php endforeach; ?>

               </div>
            </div>
         </div>

      </div>
   </section>

   <section id="subprod3" class="ftco-section testimony-section ftco-no-pb prod-section">
      <div class="img img-bg" style="background-image: url(images/bg_home.jpg);" data-stellar-background-ratio="0.5">
      </div>
      <div class="overlay"></div>
      <div class="container" style="padding-bottom: 5px;">
         <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
               <span class="subheading"></span>
               <h3 class="mb-0 judul-produk">PUMP</h3>
            </div>
         </div>
         <div class="row ftco-animate">
            <div class="col-md-12">
               <div class="carousel-testimony owl-carousel ftco-owl">

                  <?php foreach ($arrpump as $nmpump) : ?>
                  <div class="item">
                     <div class="testimony-wrap py-4 text-center">
                        <a
                           href="produkDetil?index=<?= $nmpump["index"] ?>&jenis=<?= $nmpump["jenis"]; ?>&nama=<?= $nmpump["nama"]; ?>&proses=<?= $nmpump["proses"] ?>&berat=<?= $nmpump["berat"] ?>&cycle=<?= $nmpump["cycle"] ?>&gambar=<?= $nmpump["gambar"] ?>">
                           <img class="listproduk" src="img/produk/<?= $nmpump["gambar"] ?>">
                           <div class="yeuh">
                              <h6><?= $nmpump["nama"] ?></h6>
                              <h6 class="font-weight-light">-</h6>
                           </div>
                        </a>
                     </div>
                  </div>
                  <?php endforeach; ?>

               </div>
            </div>
         </div>

      </div>
   </section>

   <section id="subprod4" class="ftco-section testimony-section ftco-no-pb prod-section">
      <div class="img img-bg" style="background-image: url(images/bg_home.jpg);" data-stellar-background-ratio="0.5">
      </div>
      <div class="overlay"></div>
      <div class="container" style="padding-bottom: 5px;">
         <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
               <span class="subheading"></span>
               <h3 class="mb-0 judul-produk">CAP</h3>
            </div>
         </div>
         <div class="row ftco-animate">
            <div class="col-md-12">
               <div class="carousel-testimony owl-carousel ftco-owl">

                  <?php foreach ($arrcap as $nmcap) : ?>
                  <div class="item">
                     <div class="testimony-wrap py-4 text-center">
                        <a
                           href="produkDetil?index=<?= $nmcap["index"] ?>&jenis=<?= $nmcap["jenis"]; ?>&nama=<?= $nmcap["nama"]; ?>&proses=<?= $nmcap["proses"] ?>&berat=<?= $nmcap["berat"] ?>&cycle=<?= $nmcap["cycle"] ?>&gambar=<?= $nmcap["gambar"] ?>">
                           <img class="listproduk" src="img/produk/<?= $nmcap["gambar"] ?>">
                           <div class="yeuh">
                              <h6><?= $nmcap["nama"] ?></h6>
                              <h6 class="font-weight-light">-</h6>
                           </div>
                        </a>
                     </div>
                  </div>
                  <?php endforeach; ?>


               </div>
            </div>
         </div>

      </div>
   </section>
@endsection

@section('scripts')
   <script>
      $(window).scroll(function() {
         var scrollDistance = $(window).scrollTop();

         // Show/hide menu on scroll
         //if (scrollDistance >= 850) {
         //		$('nav').fadeIn("fast");
         //} else {
         //		$('nav').fadeOut("fast");
         //}

         // Assign active class to nav links while scolling
         $('.prod-section').each(function(i) {
            if ($(this).position().top <= scrollDistance + 10) {
               $('.et-hero-tab.active').removeClass('active');
               $('.et-hero-tab').eq(i).addClass('active');
            }
         });
      }).scroll();
   </script>
@endsection
