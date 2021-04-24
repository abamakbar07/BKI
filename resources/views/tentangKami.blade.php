@extends('layout/main', ['page' => 'Tentang'])

@section('content')
   <section id="About">
      <div class="container" style="margin-top:100px; margin-bottom: 100px;">
         <div class="row">
            <div class="col-md-6 text-center align-text-bottom imgtentangkami" data-aos="fade-right">
               <a href="" class="ini" style="text-align: center;">
                  <img src="img/pabrik.png" class="gambarkosongimg">
               </a>
            </div>
            <div class="col-md-6">
               <div class="row" data-aos="fade-left" style="margin:15px; margin-bottom: 0px;">
                  <h1>Tentang Perusahaan</h1>
               </div>
               <div class="row" data-aos="fade-left" style="margin:15px; margin-bottom: 0px;">
                  <a>PT BERKAH KARYA INTERNASIONAL adalah sebuah perusahaan berskala menengah ke atas yang bergerak
                     dibidang Spesialisasi Kemasan Plastik.</a><br>
                  <a> Perusahaan ini berdiri pada tahun 2018 yang berpusat di Gunung Sindur dengan pabrik seluas 600 m2
                     yang berlokasi di Komplek Pergudangan Sigma Kartika Blok M No.06 Gunung Sindur Bogor. Yang
                     memproduksi kemasan plastik dan barang-barang plastik berkualitas lainnya.</a><br>
                  <a>Tujuan dari pendirian perusahaan ini adalah untuk melayani kebutuhan konsumen terhadap berbagai
                     macam pemakaian produk kemasan plastik. Dibuat dari bahan- bahan yang berkualitas dan ditangani
                     oleh para ahli dibidang pembuatan produk plastik menggunakan mesin-mesin yang berkualitas.</a>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section id="VisiMisi">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-6">
               <div class="text-center" style="height: 210px;">
                  <h1 data-aos="fade-down">VISI</h1>
                  <div class="list-group text-left">
                     <div data-aos="fade-down" class="list-group-item bg-transparent"
                        style="border:white; height: 40px;"><span class="fa fa-chevron-right mr-2"></span>
                        Produk-produk dengan jumlah yang kecil masih bisa dijalankan dengan harga yg sangat kompentitif.
                     </div>
                     <div data-aos="fade-down" class="list-group-item bg-transparent"
                        style="border:white; margin-bottom: -20px; margin-top: -20; height: 40px;">
                        <!-- <span class="fa fa-chevron-right mr-2"></span> -->
                     </div>
                     <div data-aos="fade-down" class="list-group-item bg-transparent"
                        style="border:white; margin-bottom: -20px; margin-top: -20; height: 40px;">
                        <!-- <span class="fa fa-chevron-right mr-2"></span> -->
                     </div>
                     <div data-aos="fade-down" class="list-group-item bg-transparent"
                        style="border:white; margin-bottom: -20px; margin-top: -20; height: 40px;">
                        <!-- <span class="fa fa-chevron-right mr-2"></span> -->
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-6">
               <div class="text-center" style="height: 210px;">
                  <h1 data-aos="fade-down">MISI</h1>
                  <div class="list-group text-left">
                     <div data-aos="fade-down" class="list-group-item bg-transparent"
                        style="border:white; height: 40px;"><span class="fa fa-chevron-right mr-2"></span>
                        Produk yang berkualitas
                     </div>
                     <div data-aos="fade-down" class="list-group-item bg-transparent"
                        style="border:white; height: 40px;"><span class="fa fa-chevron-right mr-2"></span>
                        Harga yang kompetitif
                     </div>
                     <div data-aos="fade-down" class="list-group-item bg-transparent"
                        style="border:white; height: 40px;"><span class="fa fa-chevron-right mr-2"></span>
                        Suplai yang berkesinambungan
                     </div>
                     <div data-aos="fade-down" class="list-group-item bg-transparent"
                        style="border:white; height: 40px;"><span class="fa fa-chevron-right mr-2"></span>
                        Servis Customer
                     </div>

                  </div>
               </div>
            </div>
         </div>
         <br>
         <br>
      </div>

   </section>

   <section class="FasilitasKami">
      <div class="container">
         <div class="row align-item-center text-center">
            <div class="col-md-12">
               <h1>FASILITAS KAMI</h1>
               <br>
            </div>
         </div>
         <div class="row align-item-center text-center">
            <div class="col-md-6 text-center" style="padding-top: 20px;">
               <h2 data-aos="fade-right">INJECTION MACHINE</h2>
               <img src="img/BERKAH KARYA INTERNASIONAL - Injection Machine.png" alt="" id="imgmesin1"
                  data-aos="fade-up" style="width: 400px; height: 350px;">
            </div>
            <div class="col-md-6 text-center" style="padding-top: 20px;">
               <h2 data-aos="fade-left">BLOW MOLDING MACHINE</h2>
               <img src="img/BERKAH KARYA INTERNASIONAL - Blow Molding Machine.png" alt="" id="imgmesin2"
                  data-aos="fade-up" style="width: 400px; height: 350px;">
            </div>
         </div>
      </div>

   </section>
@endsection