<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>مدارس الياسمن الأهلية</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Jasmine
  * Updated: Jul 27 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/Jasmine-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">Jasmine</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul style="font-weight: bold">
        <li><a class="getstarted scrollto" href="#about">Get Started</a></li>
        <li><a class="nav-link scrollto" href="#contact">اتصل بنا</a></li>
        <li><a class="nav-link scrollto" href="#team">نبذة عنا</a></li>
        <li><a class="nav-link scrollto" href="#about">رؤيا المؤسسة</a></li>
        <li><a class="nav-link scrollto" href="#services">خدماتنا</a></li>
        <li><a class="nav-link scrollto active" href="#hero">الرئيسية</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-2 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>مدارس الياسمن الأهلية</h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="#about" class="btn-get-started scrollto">البدء</a>
            <a href="https://www.youtube.com/watch?v=wwfs5g5jaNA" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>عرض الفيديو</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in222" data-aos-delay="200">
          <img src="assets/img/child.png" style="width: 400px;" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">






    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">



        <div class="row d-flex">
          <div class="col-xl-4 col-md-6 d-flex align-items-stretch text-center" data-aos="zoom-in" data-aos-delay="300">
            <a href="{{ route('workRegister') }}" style="width: 100%" class="d-flex">
            <div class="icon-box" style="width: 100%">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4>طلب تعيين</h4>
            </div>
          </a>
          </div>

          <div class="col-xl-4 col-md-6 d-flex align-items-stretch text-center mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <a href="{{ route('registerKindergarten') }}" class="d-flex">
            <div class="icon-box">
              <div class="icon"><i class="fas fa-child fa-4x"></i></div>
              <h4>التسجيل في الاستمارة الالكترونية للروضة</h4>
            </div>
          </a>
          </div>
          <div class="col-xl-4 col-md-6 d-flex align-items-stretch text-center mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="100">
            <a href="{{ route('registerSchool') }}" class="d-flex">
            <div class="icon-box">
              <div class="icon h1"><i class="fas fa-school 4-fx"></i></div>
              <h4>التسجيل في الاستمارة الالكترونية للمدرسة</h4>
            </div>
          </a>
          </div>

          <div style="margin-top: 15px" class="col-xl-4 col-md-6 d-flex align-items-stretch text-center mt-4 mt-xl-0" data-aos="zoom-in" data-aos-delay="100">
            <a href="{{ asset('assets/privicy.pdf') }}" class="d-flex">
            <div class="icon-box">
              <div class="icon h1"><i class="fas fa-file 4-fx"></i></div>
              <h4>click here to see our privacy policy</h4>
            </div>
          </a>
          </div>
        </div>


      </div>
    </section><!-- End Services Section -->

    <!-- ======= Cta Section ======= -->
    <section id="about" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#team">Call To Action</a>
          </div>
          <div class="col-lg-9 text-center text-lg-end">
            <h3>رؤيا المؤسسة</h3>
            <p>بتوفيق من الله بدأنا خطوة حملتنا لتحقيق أحلامنا وما زلنا نسير لنحقق طموحاتنا المتجددة
                لنضع بين أيديكم ماحققته الياسمن من إنجازات في مراحل الطفولة الأولى الأصعب وهي مرحلة
                ً (رياض الأطفال) التي تحتاج إلى الحكمة والصبر والتضحية لنقف في المقدمة دائما في صناعة مستقبل
                الأجيال ، لنصل إلى قمة الرقي بعطاء وتضحيات أناس يعشقون الانسانية لنكسب في كل خطوة تجربة
                أنضجت خبرتنا منذ تأسيسها عام 2006 م فتميزنا في عالم التربية والتعليم
                حيث تم افتتاح مدرستنا في الأول من حزيران عام 2023 م</p>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->

    <!-- ======= Portfolio Section ======= -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>نبذة عنا</h2>
          <p>تأسست روضة الياسمن سنة ٢٠٠٦ م واستمر العمل بها تربويا وتعليميا لمدة سبعة عشر سنة ، أعوامًا مليئة بالنجاح والموفقية والازدهار وبعد مسيرة العمل والتقدم الذي شهدته تقرر افتتاح مدرسة الياسمن الأهلية سنة ٢٠٢٣ م لتصبح مؤسسة تربوية متكاملة</p>
        </div>

        <div class="row">

          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="card bg-secondary text-white text-end">
              <div class="card-header">
                روضة الياسمن
              </div>
              <div class="card-body">
                <div class="card-title">
                  للأتصال على الارقام
                </div>
                <div class="card-text">
                    <a href='tel:009647802465673'>07802465673</a> -
                    <a href='tel:009647702054403'>07702054403</a>
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="social">
                  <div class="mt-5">حمل تطبيقنا</div>
                    <a href="https://play.google.com/store/apps/details?id=com.lamassu.jasmine_school" style="font-size: 40px"><i class="fab fa-android" aria-hidden="true"></i></a>
                    <a href="" style="font-size: 40px"><i class="fab fa-apple"></i></a>
                  </div>
              </div>



            </div>
          </div>


          <div class="col-lg-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="card text-white text-end bg-secondary">
              <div class="card-header">
                مدارس الياسمن
              </div>
              <div class="card-body">
                <div class="card-title">
                  للأتصال على الارقام
                </div>
                <div class="card-text">
                    <a href='tel:009647744466606'>07744466606</a> -
                    <a href='tel:009647844466606'>07844466606</a>
                    <i class="fas fa-phone-alt"></i>
                </div>
                <div class="social">
                  <div class="mt-5">حمل تطبيقنا</div>
                    <a href="https://play.google.com/store/apps/details?id=com.lamassu.jasmine_school" style="font-size: 40px"><i class="fab fa-android" aria-hidden="true"></i></a>
                    <a href="" style="font-size: 40px"><i class="fab fa-apple"></i></a>
                  </div>
              </div>

            </div>
          </div>


        </div>

      </div>
    </section><!-- End Team Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>اتصل بنا</h2>
        </div>

        <div class="row text-end">
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex">
            <div class="my-3">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3334.306085627489!2d44.3390625!3d33.31081249999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15577e693df63647%3A0xab57bf1c95cc7a71!2sAl-Yasameen%20Private%20Kindergarten!5e0!3m2!1sen!2siq!4v1691273335698!5m2!1sen!2siq" width="650" height="450" style="" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>            </div>
          </div>

          <div class="col-lg-5 d-flex">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>الموقع</h4>
                <p>بغداد - المنصور شارع 14 رمضان</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>البريد الالكتروني</h4>
                <a href="mailto: talal@secondhome-iq.com">talal@secondhome-iq.com</a>
              </div>

              <div class="justify-between mt-4">
                <a href="https://www.facebook.com/JasmineKindergaten" style="margin-right: 5px" class="email me-2"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com/jasmine_schools/" class="email me-2"><i class="fab fa-instagram"></i></a>
                <h4>شبكات التواصل الاجتماعي</h4>
              </div>



            </div>
        </div>
        </div>
      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Jasmine</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>

            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Jasmine</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/Jasmine-free-bootstrap-html-template-corporate/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
