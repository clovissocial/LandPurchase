<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Land Detector And Purchase</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Property Search Section ======= -->
    <div class="click-closed"></div>
    <!--/ Form Search Star /-->
    <div class="box-collapse">
      <div class="title-box-d">
        <h3 class="title-d">Search Available Land</h3>
      </div>
      <span class="close-box-collapse right-boxed bi bi-x"></span>
      <div class="box-collapse-wrap form">
        <form class="form-a">
          <div class="row">
            <div class="col-md-12 mb-2">
              <div class="form-group">
                <label class="pb-2" for="Type">Keyword</label>
                <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="Type">Type</label>
                <select class="form-control form-select form-control-a" id="Type">
                  <option>All Type</option>
                  <option>Agricultural Area</option>
                  <option>Commercial Area</option>
                  <option>Residential Area</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="city">City</label>
                <select class="form-control form-select form-control-a" id="city">
                  <option>All City</option>
                  <option>Buea</option>
                  <option>Limbe</option>
                  <option>Tiko</option>
                  <option>Mutengene</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="bedrooms">Hectares</label>
                <select class="form-control form-select form-control-a" id="bedrooms">
                  <option>Any</option>
                  <option>200 - 1000 hectares</option>
                  <option>1500 - 4000 hectares</option>
                  <option>4500 - 10,0000 hectares</option>
                </select>
              </div>
            </div>
            <!-- <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="garages">Garages</label>
                <select class="form-control form-select form-control-a" id="garages">
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                  <option>04</option>
                </select>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="bathrooms">Bathrooms</label>
                <select class="form-control form-select form-control-a" id="bathrooms">
                  <option>Any</option>
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
                </select>
              </div>
            </div> -->
            <div class="col-md-6 mb-2">
              <div class="form-group mt-3">
                <label class="pb-2" for="price">Min Price</label>
                <select class="form-control form-select form-control-a" id="price">
                  <option>Unlimited</option>
                  <option>2,000,000  - 4000, 000 FCFA</option>
                  <option>4.5,000,000 - 10, 000, 000 FCFA</option>
                  <option>10.5,000,000 - 15, 000, 000 FCFA</option>
                  <option>15.5,000,000 - 25, 000, 000 FCFA</option>
                </select>
              </div>
            </div>
            <div class="col-md-12">
              <button type="submit" class="btn btn-b">Search Land</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- End Property Search Section -->>
  
    <!-- ======= Header/Navbar ======= -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
      <div class="container">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span></span>
          <span></span>
          <span></span>
        </button>
        <a class="navbar-brand text-brand" href="index.php">Land<span class="color-b">Finder</span></a>
  
        <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
          <ul class="navbar-nav">
  
            <li class="nav-item">
              <a class="nav-link " href="index.php">Home</a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link " href="about.php">About</a>
            </li>
  
            <li class="nav-item">
              <a class="nav-link " href="property-grid.php">Available Lands</a>
            </li>
  
            <!-- <li class="nav-item">
              <a class="nav-link " href="blog-grid.php">Blog</a>
            </li> -->
  
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Resources</a>
              <div class="dropdown-menu">
                <a class="dropdown-item active" href="property-single.php">Property Single</a>
                <a class="dropdown-item " href="blog-single.php">Blog Single</a>
                <a class="dropdown-item " href="agents-grid.php">Agents Grid</a>
                <a class="dropdown-item " href="agent-single.php">Agent Single</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
  
        <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
          <i class="bi bi-search"></i>
        </button>
  
      </div>
    </nav><!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">We Deal With Purchase Of Lands In cameroon</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  About
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="assets/img/land-2.jpg" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">Land Finder
                <span></span>
                <br> Since 2021
              </h3>
              <p>Created by Nkenganyi Clovis</p>
            </div>
          </div>
          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="assets/img/land-3.jpg" alt="" class="img-fluid">
              </div>
              <div class="col-lg-2  d-none d-lg-block position-relative">
                <div class="title-vertical d-flex justify-content-start">
                  <span>LandFinder Exclusive Property</span>
                </div>
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d">Know
                    <span class="color-d">More</span> About
                    <br> Us.
                  </h3>
                </div>
                <p class="color-text-a">
                  Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget
                  consectetur sed, convallis
                  at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum
                  ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
                  neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                </p>
                <p class="color-text-a">
                  Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.
                  Mauris blandit aliquet
                  elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed,
                  convallis at tellus.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- =======Team Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Meet Our Team</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="assets/img/edited-12.jpg" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.php" class="link-two">Margaret Sotillo
                        <br> Escala</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> +54 356 945234
                    </p>
                    <p>
                      <strong>Email: </strong> agents@example.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="assets/img/he.jpg" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.php" class="link-two">Stiven Spilver
                        <br> Darw</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> +54 356 945234
                    </p>
                    <p>
                      <strong>Email: </strong> agents@example.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-dribbble" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-d">
              <div class="card-img-d">
                <img src="assets/img/hre.jpg" alt="" class="img-d img-fluid">
              </div>
              <div class="card-overlay card-overlay-hover">
                <div class="card-header-d">
                  <div class="card-title-d align-self-center">
                    <h3 class="title-d">
                      <a href="agent-single.php" class="link-two">Emma Toledo
                        <br> Cascada</a>
                    </h3>
                  </div>
                </div>
                <div class="card-body-d">
                  <p class="content-d color-text-a">
                    Sed porttitor lectus nibh, Cras ultricies ligula sed magna dictum porta two.
                  </p>
                  <div class="info-agents color-a">
                    <p>
                      <strong>Phone: </strong> +54 356 945234
                    </p>
                    <p>
                      <strong>Email: </strong> agents@example.com
                    </p>
                  </div>
                </div>
                <div class="card-footer-d">
                  <div class="socials-footer d-flex justify-content-center">
                    <ul class="list-inline">
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-facebook" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-twitter" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-instagram" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-linkedin" aria-hidden="true"></i>
                        </a>
                      </li>
                      <li class="list-inline-item">
                        <a href="#" class="link-one">
                          <i class="bi bi-dribbble" aria-hidden="true"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Land Detector</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duis
                sed aute irure.
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone .</span> +(237) 681-117-453
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> contactlanddetector.com
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">The Company</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Site Map</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Legal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Agent Admin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Careers</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Affiliate</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Important Links</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="about.php">About US</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="agents-grid.php">Agents</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="contact.php">Contact Us</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="property-grid.php">Available lands</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Home</a>
              </li>
              <li class="list-inline-item">
                <a href="#">About</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Property</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Blog</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Contact</a>
              </li>
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-instagram" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright 2022
              <span class="color-a">Land Detector</span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            Designed by <a href="https://positivevibesmedia.com/">Nk Clovis - Positive Vibes Media</a>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<<<<<<< HEAD:about.php

=======
>>>>>>> 6a8e573be864cd8cfcaff105aa432e0436be3a66:about.html
  <!--=========== Tawk.to LiveChat Script Code ============-->
  <!--Start of Tawk.to Script-->
<script type="text/javascript">
  var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
  (function(){
  var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
  s1.async=true;
  s1.src='https://embed.tawk.to/62187d131ffac05b1d7ba9e1/1fsnqh5sv';
  s1.charset='UTF-8';
  s1.setAttribute('crossorigin','*');
  s0.parentNode.insertBefore(s1,s0);
  })();
  </script>
  <!--End of Tawk.to Script-->

</body>

</html>