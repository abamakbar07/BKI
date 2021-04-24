<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
   <title>BERKAH KARYA INTERNASIONAL</title>

   <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
   <link
      href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet">

   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      type="text/css">

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/style.css">

   <link rel="stylesheet" href="css/news/animate.css">
   <link rel="stylesheet" href="css/news/owl.carousel.min.css">
   <link rel="stylesheet" href="css/news/owl.theme.default.min.css">
   <link rel="stylesheet" href="css/news/magnific-popup.css">
   <link rel="stylesheet" href="css/news/flaticon.css">

   <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
   <script src="js/jquery-3.5.1.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
   <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
   <script src="js/style.js"></script>
   <script src="js/bootstrap.min.js"></script>

   <!-- ================ AOS CDN ================= -->
   <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

   <!--    <script type="text/javascript">
      if(window.innerWidth < 744){
        document.getElementById("geserkiri1").setAttribute("data-aos", "fade-up");
        document.getElementById("geserkiri2").setAttribute("data-aos", "fade-up");
      }else{
        document.getElementById("geserkiri1").setAttribute("data-aos", "fade-left");
        document.getElementById("geserkiri2").setAttribute("data-aos", "fade-left");         
      }
  </script> -->

</head>

<body>
   <!-- --------------------------------------------------------NAVBAR------------------------------------------------- -->
   <!-- <div id="navbar" style="z-index: 1000;"> -->


   <div id="navbarturun" class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 border-bottom shadow-md" style="z-index: 1000; margin-bottom: 0; background-color: #ffffffdf;">
      <a href="beranda"><img src="img/logo_neo.png" class="logoku"></a>
      <h5 href="beranda" class="my-0 mr-md-auto font-weight-normal serif""><a href="beranda" style="color: black">PT. BERKAH KARYA INTERNASIONAL</a></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-1 text-dark <?php if($page == "Beranda") echo "font-weight-bold";?>" href="beranda">Beranda</a>
        <a class="p-1 text-dark <?php if($page == "Tentang") echo "font-weight-bold";?>" href="tentangKami">Tentang Kami</a>
        <a class="p-1 text-dark <?php if($page == "Customer") echo "font-weight-bold";?>" href="customer">Customer</a>
        <a class="p-1 text-dark <?php if($page == "Produk") echo "font-weight-bold";?>" href="produk">Produk</a>
        <a class="p-1 text-dark <?php if($page == "Karir") echo "font-weight-bold";?>" href="karir">Karir</a>
      </nav>
      <a class="btn btn-outline-primary" href="http://wa.me/6282112971274">Hubungi Kami</a>
  </div>
    
  <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-white shadow-md navbardiem">
      <a href="beranda"><img src="img/logo_neo.png" class="logoku"></a>
      <h5 href="beranda" class="my-0 mr-md-auto font-weight-normal serif"><a href="beranda" style="color: black">PT. BERKAH KARYA INTERNASIONAL</a></h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-1 text-dark <?php if($page == "Beranda") echo "font-weight-bold";?>" href="beranda">Beranda</a>
        <a class="p-1 text-dark <?php if($page == "Tentang") echo "font-weight-bold";?>" href="tentangKami">Tentang Kami</a>
        <a class="p-1 text-dark <?php if($page == "Customer") echo "font-weight-bold";?>" href="customer">Customer</a>
        <a class="p-1 text-dark <?php if($page == "Produk") echo "font-weight-bold";?>" href="produk">Produk</a>
        <a class="p-1 text-dark <?php if($page == "Karir") echo "font-weight-bold";?>" href="karir">Karir</a>
      </nav>
      <a class="btn btn-outline-primary" href="http://wa.me/6282112971274">Hubungi Kami</a>
  </div>

   <!-- =============================================================================================================== -->

   @yield('content')

   <!-- =====================================================Footer================================================ -->
<section id="footer" class="puter">
   <div class="container">
   <div class="row">
      <div class="col-md-3" style="margin-top: 20px">
         <h6 class="text-white" style="margin-bottom: 10px;">TENTANG KAMI</h6>
         <hr class="hrputer">
         <p class=" container paragraph text-white">Kami adalah perusahaan berskala menengah ke atas yang bergerak dibidang Spesialisasi Kemasan Plastik.</p>
         <div class="row">
            <div id="services">
               <li>
               <div class="facebook">
                  <a href="#">
                     <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a>
               </div>
               </li>
               <li>
               <div class="twitter">
                  <a href="#">
                     <i class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
               </div>
               </li>
               <li>
               <div class="envelope">
                  <a href="#">
                     <i class="fa fa-envelope" aria-hidden="true"></i>
                  </a>
               </div>
               </li>
               <li>
               <div class="linkedin">
                  <a href="#">
                     <i class="fa fa-phone" aria-hidden="true"></i>
                  </a>
               </div>
               </li>
               <li>
               <div class="instagram">
                  <a href="#">
                     <i class="fa fa-linkedin" aria-hidden="true"></i>
                  </a>
               </div>
               </li>

            </div>
         </div>
      </div>
      <div class="col-md-3" style="margin-top: 20px">
         <h6 class="text-white" style="margin-bottom: 10px;">KONTAK</h6>
         <hr class="hrputer">
         <div class="text-white" style="display: block;">

         <div style="display: flex">
            <div class="col-md-4">Email</div>
            <div class="col-md-12">: <a class="text-white" href="mailto:info@bki.com">info@bki.com</a></div>
         </div>
         <div style="display: flex">
            <div class="col-md-4">Phone</div>
            <div class="col-md-12">: <a class="text-white" href="wa.me/6282112971274">0821-1297-1274</a></div>
         </div>
         <div style="display: flex">
            <div class="col-md-4">Faximile</div>
            <div class="col-md-12">: <a class="text-white" href="">0821-1297-1274</a></div>
         </div>

         </div>
      </div>


      <div class="col-md-3" style="margin-top: 20px">
         <h6 class="text-white" style="margin-bottom: 10px;">LOKASI</h6>
         <hr class="hrputer">
         <div class="col-md-12 container-fluid">
         <iframe style="width: 100%; height: 100%" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5335113407978!2d106.96371557057799!3d-6.453874730835977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x33b1e154c32841ef!2sWarung%20Nasi%20Ibu%20Anah!5e0!3m2!1sid!2sid!4v1606797586768!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
         </div>
      </div>


      <div class="col-md-3" style="margin-top: 20px">
         <h6 class="text-white" style="margin-bottom: 10px;">CONTACT</h6>
         <hr class="hrputer">
         <div class="container text-white" style="padding-left: 0">
            <div class="form-group align-bottom" style="display: flex">
               <label class="col-3" for="">Email</label>
               <input class="col-9" type="email" class="form-control" name="" id="" style="height: 28px">
            </div>
            <div class="form-gr align-bottom" style="display: flex">
               <label class="col-3" for="">Pesan</label>
               <textarea class="form col-9" name="" id="" rows="3"></textarea>
            </div>
            <div class="col-sm-12" style="padding-top: 15px">
               <p align="right">
               <button type="submit" class="btn btn-primary">Submit</button>
               </p>
            </div>
         </div>
         </div>
      </div>
      
   </div>
   </div>

   <footer class="footer">  
      <div class="col-md-12 text-center text-light">
         Copyright 2020 © PT Berkah Karya Internasional
      </div>
   </footer>

</section>
   <!-- =====================================================JavaScript================================================ -->
   @yield('scripts')

   <script>
   AOS.init({
      duration: 1000,
      disable: function() {
         if (window.screen.width < 480 || document.body.clientWidth < 480 || document.documentElement
            .clientWidth < 480) {
            return true
         } else {
            return false
         }
      }
   });
   </script>
   <script>
   //
   // When the user scrolls down 20px from the top of the document, slide down the navbar                //
   window.onscroll = function() {
      scrollFunction()
   }; //
   //
   function scrollFunction() { //
      if (document.body.scrollTop > 70 || document.documentElement.scrollTop > 70) { //
         document.getElementById("navbarturun").style.top = "0"; //
         // document.getElementById("navbarasli").style.top="-150px";                                      //
      } else { //
         document.getElementById("navbarturun").style.top = "-215px"; //
         // document.getElementById("navbarasli").style.top="0";                                           //
      } //
   } //
   </script>

   <script src="js/news/jquery.min.js"></script>
   <script src="js/news/jquery-migrate-3.0.1.min.js"></script>
   <script src="js/news/popper.min.js"></script>
   <script src="js/news/bootstrap.min.js"></script>
   <script src="js/news/jquery.easing.1.3.js"></script>
   <script src="js/news/jquery.waypoints.min.js"></script>
   <script src="js/news/jquery.stellar.min.js"></script>
   <script src="js/news/owl.carousel.min.js"></script>
   <script src="js/news/jquery.magnific-popup.min.js"></script>
   <script src="js/news/jquery.animateNumber.min.js"></script>
   <script src="js/news/scrollax.min.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
   </script>
   <script src="js/news/google-map.js"></script>
   <script src="js/news/main.js"></script>
   <script src="js/news/back2top.js"></script>
   <script src="js/news/myDropdown.js"></script>

</body>

</html>