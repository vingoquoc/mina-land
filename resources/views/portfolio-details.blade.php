@extends('layout')
@section('content')

<body class="portfolio-details-page">

@include('head.header')

  <main class="main">
    <div id="page-title-bar" class="page-title-bar hero section">
      <div class="container " >
          <div class="wrap w-100 d-flex align-items-center" style="min-height: 543px; padding-top: 123px;">
            <div class="page-title-bar-inner d-flex flex-column align-items-center w-100" id="hero">
                <div class="page-header">
                <h1><span>Pavilion Square</span></h1>
                </div>
                <div class="breadcrumb">
                  <a class="breadcrumb-projects" href="#"><p>visit website</p><span class="breadcrumb-icon"><i class="opal-icon-arrow-right" aria-hidden="true"></i></span></a>
                </div>  
            </div>
          </div>
      </div>
    </div>

    <div id="header" class="header sticky-top">
      <ul class="single-portfolio-menu  d-flex justify-content-center" style="top: 0px;">
          <li><a href="#overview">Overview</a></li>
          <li><a href="#amenities">Amenities</a></li>
          <li><a href="#gallery">Gallery</a></li>
          <li><a href="#plans">Plans</a>
          </li><li><a href="#location">Location</a>
        </ul>
    </div>

    <div class="container">
      <div class="overview-style-">
        <div id="overview" class="w-100">
            <h1 class="single-portfolio-summary-meta-title"><span> Overview </span></h1>
        </div>
        <div class="single-portfolio-summary-meta row w-100">
            <div class="col-xl-9 col-12">
              <div class="row">
                  <div class="col-xl-6 col-12 pt-3">
                    <img width="587" height="1000" src="{{asset('/img/pavi-project.png')}}" alt="">
                    <noscript><img width="587" height="1000" src="https://www.ethansee.com/wp-content/uploads/2020/02/agile-embassy-garden-1.jpg" class="attachment-rehomes-gallery-image size-rehomes-gallery-image wp-post-image" alt="" decoding="async" fetchpriority="high" srcset="https://www.ethansee.com/wp-content/uploads/2020/02/agile-embassy-garden-1.jpg 587w, https://www.ethansee.com/wp-content/uploads/2020/02/agile-embassy-garden-1-176x300.jpg 176w" sizes="(max-width: 587px) 100vw, 587px" /></noscript>
                  </div>
                  <div class="col-xl-6 col-12">
                    <div class="px-xl-3">
                        <h3>LIVING GREEN, GRAND AND GLOBAL IN KUALA LUMPUR’S MOST PRESTIGIOUS ADDRESS</h3>
                        <p>The striking stature of Agile Embassy Garden is oriented intentionally to offer residents spectacularly unblocked views of Kuala Lumpur city. Fortune Global 500 corporations and foreign embassies in the immediate surroundings elevate the stately ambience to sophisticated heights.</p>
                        <p>A world of effortless convenience is at your doorstep where world-class amenities such as education institutions, medical facilities, shopping malls and offices ensure residents experience connectivity without compromise in the heart of the capital city. Where walking distance to the MRT station ensures the daily commute is a hassle-free journey that connects you to the rest of the city and beyond.</p>
                    </div>
                  </div>
              </div>
            </div>
            <div class="col-xl-3 col-12">
              <ul class="single-portfolio-summary-meta-list">
                  <li><span class="meta-title">Developer </span><span class="meta-value">Armani Hartajaya Sdn Bhd</span></li>
                  <li><span class="meta-title">Location </span><span class="meta-value">Lot 297, Jalan Raja Chulan</span></li>
                  <li><span class="meta-title"> </span><span class="meta-value">50200 Kuala Lumpur</span></li>
                  <li><span class="meta-title">Total Acreage </span><span class="meta-value">2.023 acres</span></li>
                  <li><span class="meta-title">Title Tenure</span><span class="meta-value">Leasehold 租赁地契</span></li>
                  <li><span class="meta-title">Development Component</span><span class="meta-value">Luxury Residences:67-storey, 960 units Corporate Suites + 6 Retail lots 25-storey, 106 unitss</span></li>
                  <li><span class="meta-title"></span><span class="meta-value"></span></li>
                  <!-- <li><span class="meta-title">Flat Size</span><span class="meta-value"></span></li>
                  <li><span class="meta-title">Price Range </span><span class="meta-value">$900k - $1mil</span></li> -->
              </ul>
            </div>
        </div>
      </div>
     </div>

<section id="gallery" class="portfolio-details section">
   <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div id="gallery" class="w-100">
         <h3 class="single-portfolio-summary-meta-title">Gallery</h3>
      </div>
      <div class="row gy-4">
         <div class="col-lg-12">
            <div class="portfolio-details-slider swiper init-swiper">
               <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": "auto",
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    }
                  }
               </script>
               <div class="swiper-wrapper align-items-center">
                  <div class="swiper-slide">
                     <img src="{{asset('/img/portfolio/pavi-level1.png')}}" alt="">
                  </div>
                  <div class="swiper-slide">
                     <img src="{{asset('/img/portfolio/pavi-level2.png')}}" alt="">
                  </div>
                  <div class="swiper-slide">
                     <img src="{{asset('/img/portfolio/pavi-level3.png')}}" alt="">
                  </div>
                  <div class="swiper-slide">
                     <img src="{{asset('/img/portfolio/pavi-level4.png')}}" alt="">
                  </div>
                  <div class="swiper-slide">
                     <img src="{{asset('/img/portfolio/pavi-level6.png')}}" alt="">
                  </div>
                  <div class="swiper-slide">
                     <img src="{{asset('/img/portfolio/pavi-level5.png')}}" alt="">
                  </div>
               </div>
               <div class="swiper-pagination"></div>
            </div>
         </div>
      </div>
   </div>
</section>


    

  </main>

  @include('footer.footer')

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Preloader -->
<div id="preloader">
  <div></div>
  <div></div>
  <div></div>
  <div></div>
</div>

<!-- Vendor JS Files -->
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('vendor/aos/aos.js')}}"></script>
<script src="{{asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('vendor/waypoints/noframework.waypoints.js')}}"></script>
<script src="{{asset('vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('js/main.js')}}"></script>
</body>
@endsection
