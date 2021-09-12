@extends('layouts.app')

@section('title') Gallery @endsection
@section('css')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="{{asset('fontend/css/gallery.css')}}">

<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
@endsection


@section('content') 
<!-- Gallery Start -->
<section id="gallery">
 <div class="container">
  <div id="image-gallery">
    <div class="row">
      <div class="wrapper">
        <!-- filter Items -->
        <h2>Gallery</h2>
        <hr class="gl_hr">
        <nav>
         <div class="items">
          <span class="item active" data-name="all">ALL</span>
          <span class="item" data-name="bag">STARTERS</span>
          <span class="item" data-name="Breakfast">BREAKFAST</span>
          <span class="item" data-name="Dinner">DINNER</span>
          <span class="item" data-name="Lunch">LUNCH</span>
        </div>
      </nav>
    </div>
  </div>
  <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
       <div class="img-wrapper">
          <a href="https://unsplash.it/500"><img src="{{asset('fontend/image/gallery/1.jpg')}}" class="img-responsive"></a>
          <div class="img-overlay">
           <i class="fa fa-plus-circle" aria-hidden="true"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
       <div class="img-wrapper">
          <a href="https://unsplash.it/600"><img src="{{asset('fontend/image/gallery/2.jpg')}}" class="img-responsive"></a>
          <div class="img-overlay">
           <i class="fa fa-plus-circle" aria-hidden="true"></i>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
       <div class="img-wrapper">
        <a href="https://unsplash.it/700"><img src="{{asset('fontend/image/gallery/3.jpg')}}" class="img-responsive"></a>
        <div class="img-overlay">
         <i class="fa fa-plus-circle" aria-hidden="true"></i>
       </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
       <div class="img-wrapper">
        <a href="https://unsplash.it/800"><img src="{{asset('fontend/image/gallery/4.jpg')}}" class="img-responsive"></a>
        <div class="img-overlay">
         <i class="fa fa-plus-circle" aria-hidden="true"></i>
       </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
       <div class="img-wrapper">
        <a href="https://unsplash.it/900"><img src="{{asset('fontend/image/gallery/5.jpg')}}" class="img-responsive"></a>
        <div class="img-overlay">
         <i class="fa fa-plus-circle" aria-hidden="true"></i>
       </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
       <div class="img-wrapper">
        <a href="https://unsplash.it/1000"><img src="{{asset('fontend/image/gallery/8.jpg')}}" class="img-responsive"></a>
        <div class="img-overlay">
         <i class="fa fa-plus-circle" aria-hidden="true"></i>
       </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
       <div class="img-wrapper">
        <a href="https://unsplash.it/1100"><img src="{{asset('fontend/image/gallery/7.jpg')}}" class="img-responsive"></a>
        <div class="img-overlay">
         <i class="fa fa-plus-circle" aria-hidden="true"></i>
       </div>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 image">
       <div class="img-wrapper">
        <a href="https://unsplash.it/1200"><img src="{{asset('fontend/image/gallery/8.jpg')}}" class="img-responsive"></a>
        <div class="img-overlay">
         <i class="fa fa-plus-circle" aria-hidden="true"></i>
       </div>
      </div>
      </div>
    </div>
  </div>
  </div>
</section>

<!-- Gallery End -->

<!-- brand logo -->

<section class="brand_logo">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xl-12">
        <div class="brand-carousel section-padding owl-carousel">
           <div class="single-logo">
             <img src="{{asset('fontend/image/ClientLogo/1.svg')}}" alt="">
           </div>
           <div class="single-logo">
             <img src="{{asset('fontend/image/ClientLogo/2.svg')}}" alt="">
           </div>
           <div class="single-logo">
             <img src="{{asset('fontend/image/ClientLogo/3.svg')}}" alt="">
           </div>
           <div class="single-logo">
             <img src="{{asset('fontend/image/ClientLogo/4.svg')}}" alt="">
           </div>
           <div class="single-logo">
             <img src="{{asset('fontend/image/ClientLogo/5.svg')}}" alt="">
           </div>
           <div class="single-logo">
             <img src="{{asset('fontend/image/ClientLogo/6.svg')}}" alt="">
           </div>
           <div class="single-logo">
             <img src="{{asset('fontend/image/ClientLogo/4.svg')}}" alt="">
           </div>
           <div class="single-logo">
             <img src="{{asset('fontend/image/ClientLogo/5.svg')}}" alt="">
           </div>
           <div class="single-logo">
             <img src="{{asset('fontend/image/ClientLogo/6.svg')}}" alt="">
           </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- brand logo End-->

<!-- Video Gallery -->

{{-- <section class="video_gallery">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="wrapper">
          <h2 class="">Video Gallery</h2><hr class="hr_style">
          <div class="video_gallery swiper">
            <div class="slider swiper-wrapper">
              <div class="gallery_item swiper-slide ">
                <a href="https://vimeo.com/469450080" class="popup_video"><img class="img-fluid" src="{{asset('fontend/image/tham_img.png')}}" cl alt=""></a>
              </div>
              <div class="gallery_item swiper-slide">
                <a href="https://vimeo.com/469450080" class="popup_video"><img class="img-fluid" src="{{asset('fontend/image/VT/2.jpg')}}" cl alt=""></a>
              </div>
              <div class="gallery_item swiper-slide">
                <a href="https://vimeo.com/469450080" class="popup_video"><img class="img-fluid" src="{{asset('fontend/image/tham_img.png')}}" cl alt=""></a>
              </div>
              <div class="gallery_item swiper-slide">
                <a href="https://www.youtube.com/watch?v=Amq-qlqbjYA" class="popup_video"><img class="img-fluid" src="{{asset('fontend/image/tham_img.png')}}" cl alt=""></a>
              </div>
              <div class="gallery_item swiper-slide">
                <a href="https://www.youtube.com/watch?v=Amq-qlqbjYA" class="popup_video"><img class="img-fluid" src="{{asset('fontend/image/tham_img.png')}}" cl alt=""></a>
              </div>
              <div class="gallery_item swiper-slide">
                <a href="https://www.youtube.com/watch?v=Amq-qlqbjYA" class="popup_video"><img class="img-fluid" src="{{asset('fontend/image/tham_img.png')}}" cl alt=""></a>
              </div>
            </div>
            <div class="swiper gallery-nav">
              <div class="slider swiper-wrapper">
                <div class="gallery_item swiper-slide">
                  <img class="img-fluid" src="{{asset('fontend/image/VT/1.jpg')}}" alt="">
                </div>
                <div class="gallery_item swiper-slide">
                  <img class="img-fluid" src="{{asset('fontend/image/VT/2.jpg')}}" alt="">
                </div>
                <div class="gallery_item swiper-slide">
                  <img class="img-fluid" src="{{asset('fontend/image/VT/3.jpg')}}" alt="">
                </div>
                <div class="gallery_item swiper-slide">
                  <img class="img-fluid" src="{{asset('fontend/image/VT/1.jpg')}}" alt="">
                </div>
                <div class="gallery_item swiper-slide">
                  <img class="img-fluid" src="{{asset('fontend/image/VT/2.jpg')}}" alt="">
                </div>
                <div class="gallery_item swiper-slide">
                  <img class="img-fluid" src="{{asset('fontend/image/VT/3.jpg')}}" alt="">
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
 --}}
<section style="background-image: url({{asset('fontend/image/bg/2.png')}}); background-size: cover;">
  <div class="container">
    <div class="row">
          <div class="wrapper">
            <!-- filter Items -->
            <h2>Video Gallery</h2><hr class="vgl_hr">
          </div>
    </div>
    <div class="row">
      <div class="col-lg-12 col-md-12 col-xl-12">
        <div class="yt-general">
          <div class="yt-cargador">
            <div id="yt-video" class="yt-video">
               <!-- CODIGO COMPLETO PRIMER VIDEO CON ID=ID-FRAME-->
               <iframe id="id-frame" width="420" height="315" src="https://player.vimeo.com/video/469450080?h=363cf391a5" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
          <div class="yt-miniaturas">
            <!-- INCLUIR LA ID DE CADA VIDEO 2 VECES EN CADA ENLACE: PARA VÍDEO Y PARA MINIATURA -->
            <a href="javascript:cargarVideo('id-frame', 'RnoDb0bMQuk');">
               <img src="https://player.vimeo.com/video/469450080?h=363cf391a5" />
               <div>1956 - That's amore</div>
            </a>
            <a href="javascript:cargarVideo('id-frame', '7IjgZGhHrYY');">
               <img src="https://img.youtube.com/vi/7IjgZGhHrYY/1.jpg" />
               <div>1957 - Great balls of fire</div>
            </a>
            <a href="javascript:cargarVideo('id-frame', 'noE1u3Xu6Vg');">
               <img src="https://img.youtube.com/vi/noE1u3Xu6Vg/1.jpg" />
               <div>1956 - Don't be cruel</div>
            </a>
            <a href="javascript:cargarVideo('id-frame', 'ty31QY5ZGHo');">
               <img src="https://img.youtube.com/vi/ty31QY5ZGHo/1.jpg" />
               <div>1957 - Everyday</div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Video Gallery End-->


<!-- home delivery start--> 
<section class="cl-block table_booking section-bottom-padding" style="background-image: url({{asset('fontend/image/bg/1.png')}}); background-size: cover;">
 <div class="container">
  <div class="row">
   <div class="col">
    <div class="col-md-5">
     <div class="hero-inner-block" style="padding: 35px 60px;">
      <h2>BOOK A TABLE</h2>
      <form action="https://indiangardenhammarby.se/reservation/request" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="yFLx0mWcWKr6Q2V3Dco8Vn1eIXeqVNKuZPsrruGF">
        <div class="mb-2">
          <input id="name" name="name" class="form-control" type="text" placeholder="Enter your name">
        </div>
        <div class="mb-2">
          <input id="email" name="email" class="form-control" type="email" placeholder="Enter your email address">
        </div>
        <div class="mb-2">
          <input id="phone" name="phone" class="form-control" type="text" placeholder="Enter your phone number">
        </div>
        <div class="mb-2">
          <div id="picker-no-time"></div>
          <input type="hidden" id="reservations_date" value="" />
        </div>
        <div class="mb-2">
          <select name="reservations_time" class="form-control"><option value="">Select Time</option><option value="11:00">11:00</option><option value="11:30">11:30</option><option value="12:00">12:00</option><option value="12:30">12:30</option><option value="13:00">13:00</option><option value="13:30">13:30</option><option value="14:00">14:00</option><option value="14:30">14:30</option><option value="15:00">15:00</option><option value="16:00">16:00</option><option value="16:30">16:30</option><option value="17:00">17:00</option><option value="17:30">17:30</option><option value="18:00">18:00</option><option value="18:30">18:30</option><option value="19:00">19:00</option><option value="19:30">19:30</option><option value="20:00">20:00</option><option value="21:00">21:00</option><option value="21:30">21:30</option><option value="22:00">22:00</option></select>
          <input type="hidden" name="reservations_status" value="Pending">
        </div>

        <div class="col-md-4 mb-2">
          <div class="qty-item">
           <div class="center">
            <div class="plus-minus">
             <span>
              <a href="javascript:void(0)" class="minus-btn text-black">-</a>
              <input type="text" name="name" value="1">
              <a href="javascript:void(0)" class="plus-btn text-black">+</a>
            </span>&nbsp;&nbsp;&nbsp;Person
          </div>
        </div>
      </div>
    </div>


    <div class="form-group">
      <button class="btn btn-style2">Book A Table Now</button>
    </div>
  </form>
</div>
</div>
</div>
</div>
</div>
</section>
<!-- home delivery end --> 
@endsection

@section('js')
<script src="{{asset('fontend/js/gallery.js')}}"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"> --}}



  @endsection