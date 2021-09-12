@extends('layouts.app')

@section('title') Home @endsection

@section('content')            
            <section class="slider">
                <div class="home-slider7 owl-carousel owl-theme">
                    <div class="items">
                        <div class="img-back" style="background-image:url({{asset('fontend/image/slider1.jpg')}});">
                            <div class="h-s-content">
                                <span class="slider-slogan">Top selling!</span>
                                <h1>Super broccoli from $9.00</h1>
                                <a href="#" class="btn btn-style1">
                                    <span>Shop now</span></a>
                            </div>
                        </div>
                    </div>
                        <div class="items">
                            <div class="img-back" style="background-image:url({{asset('fontend/image/slider2.jpg')}});">
                                <div class="h-s-content">
                                    <span class="slider-slogan">Top selling!</span>
                                    <h1>Otas ata pasta 20% off</h1>
                                    <a href="#" class="btn btn-style1">
                                        <span>Shop now</span></a>
                                </div>
                            </div>
                        </div>
                            <div class="items">
                                <div class="img-back" style="background-image:url({{asset('fontend/image/slider3.jpg')}});">
                                    <div class="h-s-content">
                                        <span class="slider-slogan">Top selling!</span>
                                        <h1>Super broccoli from $9.00</h1>
                                        <a href="#" class="btn btn-style1">
                                            <span>Shop now</span></a>
                                    </div>
                                </div>
                            </div>
                                <div class="items">
                                    <div class="img-back" style="background-image:url({{asset('fontend/image/slider1.jpg')}});">
                                        <div class="h-s-content">
                                            <span class="slider-slogan">Top selling!</span>
                                            <h1>Otas ata pasta 20% off</h1>
                                            <a href="#" class="btn btn-style1">
                                                <span>Shop now</span></a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </section>
                            <!--home page slider start-->
                            <!-- service start -->
                            <section class="service-7">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="service">
                                                <div class="service-box">
                                                    <div class="s-box">
                                                        <div class="service-image">
                                                            <a href="javascript:void(0)">
                                                                <img src="{{asset('fontend/image/s-image01.png')}}" class="img-fluid" alt="image">
                                                            </a>
                                                        </div>
                                                        <div class="service-content">
                                                            <h3 class="service-content-h3">Live wine function</h3>
                                                            <span>Unlimited alcoholic drink</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="service-box">
                                                    <div class="s-box">
                                                        <div class="service-image">
                                                            <a href="javascript:void(0)">
                                                                <img src="{{asset('fontend/image/s-image02.png')}}" class="img-fluid" alt="image">
                                                            </a>
                                                        </div>
                                                        <div class="service-content">
                                                            <h3 class="service-content-h3">Book dinnig table</h3>
                                                            <span>Money back guarantee</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="service-box">
                                                    <div class="s-box">
                                                        <div class="service-image">
                                                            <a href="javascript:void(0)">
                                                                <img src="{{asset('fontend/image/s-image03.png')}}" class="img-fluid" alt="image">
                                                            </a>
                                                        </div>
                                                        <div class="service-content">
                                                            <h3 class="service-content-h3">Master chef dinner</h3>
                                                            <span>Alway available timing</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="service-box">
                                                    <div class="s-box">
                                                        <div class="service-image">
                                                            <a href="javascript:void(0)">
                                                                <img src="{{asset('fontend/image/s-image04.png')}}" class="img-fluid" alt="image">
                                                            </a>
                                                        </div>
                                                        <div class="service-content">
                                                            <h3 class="service-content-h3">Balanced diet food</h3>
                                                            <span>Food is an important parts</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!-- service end -->
                            <!-- Our Products Tab start -->
                            <section class="products-tab-7 section-bottom-padding section-top-padding">
                                <div class="container">
                                    <div class="row">
                                        <div class="col">
                                            <div class="section-title">
                                                <span>Our products</span>
                                                <h2>Top recommended dishes</h2>
                                                <ul class="nav nav-tabs">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-bs-toggle="tab" href="#home">Starters</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#profile">BreakfasT</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#contact">Dinner</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-bs-toggle="tab" href="#lunch">Lunch</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content tab-pro-slider">
                                                <div class="tab-pane fade show active" id="home">
                                                    <div class="home-7-tab swiper-container">
                                                        <div class="swiper-wrapper">
                                                            <div class="swiper-slide">
                                                                <div class="h-t-pro">
                                                                    <div class="tred-pro">
                                                                        <div class="tr-pro-img">
                                                                            <a href="#">
                                                                                <img src="{{asset('fontend/image/product/1.jpg')}}" class="img-fluid" alt="image">
                                                                            </a>
                                                                        </div>
                                                                        <div class="Pro-lable">
                                                                            <span class="p-text">New</span>
                                                                        </div>
                                                                        <div class="pro-icn">
                                                                            <a href="#" class="w-c-q-icn">
                                                                                <i class="fa fa-heart"></i>
                                                                            </a>
                                                                            <a href="#" class="w-c-q-icn">
                                                                                <i class="fa fa-shopping-bag"></i>
                                                                            </a>
                                                                            <a
                                                                            href="javascript:void(0)"
                                                                            class="w-c-q-icn"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModal">
                                                                            <i class="fa fa-eye"></i>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                                <div class="caption">
                                                                    <h3>
                                                                        <a href="#">American mayonise pizza</a>
                                                                    </h3>
                                                                    <div class="rating">
                                                                        <i class="fa fa-star e-star"></i>
                                                                        <i class="fa fa-star e-star"></i>
                                                                        <i class="fa fa-star e-star"></i>
                                                                        <i class="fa fa-star e-star"></i>
                                                                        <i class="fa fa-star e-star"></i>
                                                                    </div>
                                                                    <div class="pro-price">
                                                                        <span class="new-price">$117.00 USD</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="swiper-slide">
                                                            <div class="h-t-pro">
                                                                <div class="tred-pro">
                                                                    <div class="tr-pro-img">
                                                                        <a href="#">
                                                                            <img src="{{asset('fontend/image/product/01_00001.jpg')}}" class="img-fluid" alt="image">
                                                                        </a>
                                                                    </div>
                                                                    <div class="Pro-lable">
                                                                        <span class="p-discount">-10%</span>
                                                                    </div>
                                                                    <div class="pro-icn">
                                                                        <a href="#" class="w-c-q-icn">
                                                                            <i class="fa fa-heart"></i>
                                                                        </a>
                                                                        <a href="#" class="w-c-q-icn">
                                                                            <i class="fa fa-shopping-bag"></i>
                                                                        </a>
                                                                        <a
                                                                        href="javascript:void(0)"
                                                                        class="w-c-q-icn"
                                                                        data-bs-toggle="modal"
                                                                        data-bs-target="#exampleModal">
                                                                        <i class="fa fa-eye"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="caption">
                                                                <h3>
                                                                    <a href="#">Breakfast eggplant special</a>
                                                                </h3>
                                                                <div class="rating">
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                    <i class="fa fa-star e-star"></i>
                                                                </div>
                                                                <div class="pro-price">
                                                                    <span class="new-price">$580.00 USD</span>
                                                                    <span class="old-price">
                                                                        <del>$590.00 USD</del>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="swiper-slide">
                                                        <div class="h-t-pro">
                                                            <div class="tred-pro">
                                                                <div class="tr-pro-img">
                                                                    <a href="#">
                                                                        <img src="{{asset('fontend/image/product/01_00002.jpg')}}" class="img-fluid" alt="image">
                                                                    </a>
                                                                </div>
                                                                <div class="Pro-lable">
                                                                    <span class="p-discount">-20%</span>
                                                                </div>
                                                                <div class="pro-icn">
                                                                    <a href="#" class="w-c-q-icn">
                                                                        <i class="fa fa-heart"></i>
                                                                    </a>
                                                                    <a href="#" class="w-c-q-icn">
                                                                        <i class="fa fa-shopping-bag"></i>
                                                                    </a>
                                                                    <a
                                                                    href="javascript:void(0)"
                                                                    class="w-c-q-icn"
                                                                    data-bs-toggle="modal"
                                                                    data-bs-target="#exampleModal">
                                                                    <i class="fa fa-eye"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="caption">
                                                            <h3>
                                                                <a href="#">Canadian chezze salad</a>
                                                            </h3>
                                                            <div class="rating">
                                                                <i class="fa fa-star c-star"></i>
                                                                <i class="fa fa-star c-star"></i>
                                                                <i class="fa fa-star c-star"></i>
                                                                <i class="fa fa-star-o"></i>
                                                                <i class="fa fa-star-o"></i>
                                                            </div>
                                                            <div class="pro-price">
                                                                <span class="new-price">$130.00 USD</span>
                                                                <span class="old-price">
                                                                    <del>$150.00 USD</del>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="h-t-pro">
                                                        <div class="tred-pro">
                                                            <div class="tr-pro-img">
                                                                <a href="#">
                                                                    <img src="{{asset('fontend/image/product/01_00003.jpg')}}" class="img-fluid" alt="image">
                                                                </a>
                                                            </div>
                                                            <div class="Pro-lable">
                                                                <span class="p-text">New</span>
                                                            </div>
                                                            <div class="pro-icn">
                                                                <a href="#" class="w-c-q-icn">
                                                                    <i class="fa fa-heart"></i>
                                                                </a>
                                                                <a href="#" class="w-c-q-icn">
                                                                    <i class="fa fa-shopping-bag"></i>
                                                                </a>
                                                                <a
                                                                href="javascript:void(0)"
                                                                class="w-c-q-icn"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal">
                                                                <i class="fa fa-eye"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="caption">
                                                        <h3>
                                                            <a href="#">Chiekn burger solid</a>
                                                        </h3>
                                                        <div class="rating">
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                            <i class="fa fa-star e-star"></i>
                                                        </div>
                                                        <div class="pro-price">
                                                            <span class="new-price">$117.00 USD</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="h-t-pro">
                                                    <div class="tred-pro">
                                                        <div class="tr-pro-img">
                                                            <a href="#">
                                                                <img src="{{asset('fontend/image/product/01_00004.jpg')}}" class="img-fluid" alt="image">
                                                            </a>
                                                        </div>
                                                        <div class="Pro-lable">
                                                            <span class="p-discount">-12%</span>
                                                        </div>
                                                        <div class="pro-icn">
                                                            <a href="#" class="w-c-q-icn">
                                                                <i class="fa fa-heart"></i>
                                                            </a>
                                                            <a href="#" class="w-c-q-icn">
                                                                <i class="fa fa-shopping-bag"></i>
                                                            </a>
                                                            <a
                                                            href="javascript:void(0)"
                                                            class="w-c-q-icn"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#exampleModal">
                                                            <i class="fa fa-eye"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="caption">
                                                    <h3>
                                                        <a href="#">Chilly garlic bread</a>
                                                    </h3>
                                                    <div class="rating">
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star b-star"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                        <i class="fa fa-star-o"></i>
                                                    </div>
                                                    <div class="pro-price">
                                                        <span class="new-price">$133.00 USD</span>
                                                        <span class="old-price">
                                                            <del>$145.00 USD</del>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="h-t-pro">
                                                <div class="tred-pro">
                                                    <div class="tr-pro-img">
                                                        <a href="#">
                                                            <img src="{{asset('fontend/image/product/01_00005.jpg')}}" class="img-fluid" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="Pro-lable">
                                                        <span class="p-discount">-21%</span>
                                                    </div>
                                                    <div class="pro-icn">
                                                        <a href="#" class="w-c-q-icn">
                                                            <i class="fa fa-heart"></i>
                                                        </a>
                                                        <a href="#" class="w-c-q-icn">
                                                            <i class="fa fa-shopping-bag"></i>
                                                        </a>
                                                        <a
                                                        href="javascript:void(0)"
                                                        class="w-c-q-icn"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#exampleModal">
                                                        <i class="fa fa-eye"></i>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="caption">
                                                <h3>
                                                    <a href="#">South indian palakpaner</a>
                                                </h3>
                                                <div class="rating">
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star c-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <div class="pro-price">
                                                    <span class="new-price">$139.00 USD</span>
                                                    <span class="old-price">
                                                        <del>$160.00 USD</del>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="h-t-pro">
                                            <div class="tred-pro">
                                                <div class="tr-pro-img">
                                                    <a href="#">
                                                        <img src="{{asset('fontend/image/product/01_00006.jpg')}}" class="img-fluid" alt="image">
                                                    </a>
                                                </div>
                                                <div class="Pro-lable">
                                                    <span class="p-discount">-10%</span>
                                                </div>
                                                <div class="pro-icn">
                                                    <a href="#" class="w-c-q-icn">
                                                        <i class="fa fa-heart"></i>
                                                    </a>
                                                    <a href="#" class="w-c-q-icn">
                                                        <i class="fa fa-shopping-bag"></i>
                                                    </a>
                                                    <a
                                                    href="javascript:void(0)"
                                                    class="w-c-q-icn"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#exampleModal">
                                                    <i class="fa fa-eye"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="caption">
                                            <h3>
                                                <a href="#">Delicius chiken hotdogs</a>
                                            </h3>
                                            <div class="rating">
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                                <i class="fa fa-star e-star"></i>
                                            </div>
                                            <div class="pro-price">
                                                <span class="new-price">$580.00 USD</span>
                                                <span class="old-price">
                                                    <del>$590.00 USD</del>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="h-t-pro">
                                        <div class="tred-pro">
                                            <div class="tr-pro-img">
                                                <a href="#">
                                                    <img src="{{asset('fontend/image/product/01_00007.jpg')}}" class="img-fluid" alt="image">
                                                </a>
                                            </div>
                                            <div class="Pro-lable">
                                                <span class="p-text">New</span>
                                            </div>
                                            <div class="pro-icn">
                                                <a href="#" class="w-c-q-icn">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                                <a href="#" class="w-c-q-icn">
                                                    <i class="fa fa-shopping-bag"></i>
                                                </a>
                                                <a
                                                href="javascript:void(0)"
                                                class="w-c-q-icn"
                                                data-bs-toggle="modal"
                                                data-bs-target="#exampleModal">
                                                <i class="fa fa-eye"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <h3>
                                            <a href="#">Desc butter chiken</a>
                                        </h3>
                                        <div class="rating">
                                            <i class="fa fa-star b-star"></i>
                                            <i class="fa fa-star b-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="pro-price">
                                            <span class="new-price">$93.00 USD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="h-t-pro">
                                    <div class="tred-pro">
                                        <div class="tr-pro-img">
                                            <a href="#">
                                                <img src="{{asset('fontend/image/product/01_00008.jpg')}}" class="img-fluid" alt="image">
                                            </a>
                                        </div>
                                        <div class="Pro-lable">
                                            <span class="p-discount">-12%</span>
                                        </div>
                                        <div class="pro-icn">
                                            <a href="#" class="w-c-q-icn">
                                                <i class="fa fa-heart"></i>
                                            </a>
                                            <a href="#" class="w-c-q-icn">
                                                <i class="fa fa-shopping-bag"></i>
                                            </a>
                                            <a
                                            href="javascript:void(0)"
                                            class="w-c-q-icn"
                                            data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h3>
                                        <a href="#">Fryed lupis food</a>
                                    </h3>
                                    <div class="rating">
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star d-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-price">
                                        <span class="new-price">$167.00 USD</span>
                                        <span class="old-price">
                                            <del>$179.00 USD</del>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="h-t-pro">
                                <div class="tred-pro">
                                    <div class="tr-pro-img">
                                        <a href="#">
                                            <img src="{{asset('fontend/image/product/01_00009.jpg')}}" class="img-fluid" alt="image">
                                        </a>
                                    </div>
                                    <div class="Pro-lable">
                                        <span class="p-text">New</span>
                                    </div>
                                    <div class="pro-icn">
                                        <a href="#" class="w-c-q-icn">
                                            <i class="fa fa-heart"></i>
                                        </a>
                                        <a href="#" class="w-c-q-icn">
                                            <i class="fa fa-shopping-bag"></i>
                                        </a>
                                        <a
                                        href="javascript:void(0)"
                                        class="w-c-q-icn"
                                        data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="caption">
                                <h3>
                                    <a href="#">Kathiyavadi Gujarati sandvich</a>
                                </h3>
                                <div class="rating">
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star c-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="pro-price">
                                    <span class="new-price">$230.00 USD</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-buttons">
                <div class="content-buttons">
                    <div
                    class="swiper-button-next"
                    tabindex="0"
                    role="button"
                    aria-label="Next slide"
                    aria-disabled="false"></div>
                    <div
                    class="swiper-button-prev swiper-button-disabled"
                    tabindex="0"
                    role="button"
                    aria-label="Previous slide"
                    aria-disabled="true"></div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="profile">
            <div class="home-7-tab swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="h-t-pro">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="#">
                                        <img src="{{asset('fontend/image/layout-7/11.jpg')}}" class="img-fluid" alt="image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-discount">-10%</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="#" class="w-c-q-icn">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="w-c-q-icn">
                                        <i class="fa fa-shopping-bag"></i>
                                    </a>
                                    <a
                                    href="javascript:void(0)"
                                    class="w-c-q-icn"
                                    data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                        <div class="caption">
                            <h3>
                                <a href="#">Peri peri chiken</a>
                            </h3>
                            <div class="rating">
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                            </div>
                            <div class="pro-price">
                                <span class="new-price">$580.00 USD</span>
                                <span class="old-price">
                                    <del>$590.00 USD</del>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-t-pro">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="#">
                                    <img src="{{asset('fontend/image/layout-7/12.jpg')}}" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-text">New</span>
                            </div>
                            <div class="pro-icn">
                                <a href="#" class="w-c-q-icn">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a href="#" class="w-c-q-icn">
                                    <i class="fa fa-shopping-bag"></i>
                                </a>
                                <a
                                href="javascript:void(0)"
                                class="w-c-q-icn"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="caption">
                        <h3>
                            <a href="#">South indian palakpaner</a>
                        </h3>
                        <div class="rating">
                            <i class="fa fa-star b-star"></i>
                            <i class="fa fa-star b-star"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pro-price">
                            <span class="new-price">$93.00 USD</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="h-t-pro">
                    <div class="tred-pro">
                        <div class="tr-pro-img">
                            <a href="#">
                                <img src="{{asset('fontend/image/layout-7/13.jpg')}}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="Pro-lable">
                            <span class="p-discount">-12%</span>
                        </div>
                        <div class="pro-icn">
                            <a href="#" class="w-c-q-icn">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="#" class="w-c-q-icn">
                                <i class="fa fa-shopping-bag"></i>
                            </a>
                            <a
                            href="javascript:void(0)"
                            class="w-c-q-icn"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fa fa-eye"></i>
                        </a>
                    </div>
                </div>
                <div class="caption">
                    <h3>
                        <a href="#">Special corn noodels</a>
                    </h3>
                    <div class="rating">
                        <i class="fa fa-star d-star"></i>
                        <i class="fa fa-star d-star"></i>
                        <i class="fa fa-star d-star"></i>
                        <i class="fa fa-star d-star"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="pro-price">
                        <span class="new-price">$167.00 USD</span>
                        <span class="old-price">
                            <del>$179.00 USD</del>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/14.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Special egypt pasta</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$230.00 USD</span>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-slide">
        <div class="h-t-pro">
            <div class="tred-pro">
                <div class="tr-pro-img">
                    <a href="#">
                        <img src="{{asset('fontend/image/layout-7/15.jpg')}}" class="img-fluid" alt="image">
                    </a>
                </div>
                <div class="Pro-lable">
                    <span class="p-text">New</span>
                </div>
                <div class="pro-icn">
                    <a href="#" class="w-c-q-icn">
                        <i class="fa fa-heart"></i>
                    </a>
                    <a href="#" class="w-c-q-icn">
                        <i class="fa fa-shopping-bag"></i>
                    </a>
                    <a href="javascript:void(0)" class="w-c-q-icn"  data-bs-toggle="modal"  
                     data-bs-target="#exampleModal">
                      <i class="fa fa-eye"></i>
                   </a>
               </div>
            </div>
            <div class="caption">
            <h3>
                <a href="#">Vegetable italian salad</a>
            </h3>
            <div class="rating">
                <i class="fa fa-star c-star"></i>
                <i class="fa fa-star c-star"></i>
                <i class="fa fa-star c-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <div class="pro-price">
                <span class="new-price">$130.00 USD</span>
            </div>
            </div>
       </div>
    </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/16.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">West indian onionsalad</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$126.00 USD</span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/1.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-20%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">American mayonise pizza</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$130.00 USD</span>
                    <span class="old-price">
                        <del>$150.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/2.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Breakfast eggplant special</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$117.00 USD</span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/3.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-12%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Canadian chezze salad</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star b-star"></i>
                    <i class="fa fa-star b-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$133.00 USD</span>
                    <span class="old-price">
                        <del>$145.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/4.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-21%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Chiekn burger solid</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$139.00 USD</span>
                    <span class="old-price">
                        <del>$160.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/5.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-10%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Chilly garlic bread</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$580.00 USD</span>
                    <span class="old-price">
                        <del>$590.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/6.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">South indian palakpaner</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star b-star"></i>
                    <i class="fa fa-star b-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$93.00 USD</span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/7.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-12%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Delicius chiken hotdogs</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star d-star"></i>
                    <i class="fa fa-star d-star"></i>
                    <i class="fa fa-star d-star"></i>
                    <i class="fa fa-star d-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$167.00 USD</span>
                    <span class="old-price">
                        <del>$179.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/8.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Desc butter chiken</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$230.00 USD</span>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        <div class="swiper-buttons">
            <div class="content-buttons">
                <div
                class="swiper-button-next"
                tabindex="0"
                role="button"
                aria-label="Next slide"
                aria-disabled="false"></div>
                <div
                class="swiper-button-prev swiper-button-disabled"
                tabindex="0"
                role="button"
                aria-label="Previous slide"
                aria-disabled="true"></div>
            </div>
        </div>
        </div>
        <div class="tab-pane fade" id="contact">
            <div class="home-7-tab swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="h-t-pro">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="#">
                                        <img src="{{asset('fontend/image/layout-7/9.jpg')}}" class="img-fluid" alt="image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-text">New</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="#" class="w-c-q-icn">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="w-c-q-icn">
                                        <i class="fa fa-shopping-bag"></i>
                                    </a>
                                    <a
                                    href="javascript:void(0)"
                                    class="w-c-q-icn"
                                    data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                        <div class="caption">
                            <h3>
                                <a href="#">Fryed lupis food</a>
                            </h3>
                            <div class="rating">
                                <i class="fa fa-star b-star"></i>
                                <i class="fa fa-star b-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="pro-price">
                                <span class="new-price">$93.00 USD</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-t-pro">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="#">
                                    <img src="{{asset('fontend/image/layout-7/10.jpg')}}" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-discount">-12%</span>
                            </div>
                            <div class="pro-icn">
                                <a href="#" class="w-c-q-icn">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a href="#" class="w-c-q-icn">
                                    <i class="fa fa-shopping-bag"></i>
                                </a>
                                <a
                                href="javascript:void(0)"
                                class="w-c-q-icn"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="caption">
                        <h3>
                            <a href="#">Kathiyavadi Gujarati sandvich</a>
                        </h3>
                        <div class="rating">
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pro-price">
                            <span class="new-price">$167.00 USD</span>
                            <span class="old-price">
                                <del>$179.00 USD</del>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="h-t-pro">
                    <div class="tred-pro">
                        <div class="tr-pro-img">
                            <a href="#">
                                <img src="{{asset('fontend/image/layout-7/11.jpg')}}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="Pro-lable">
                            <span class="p-text">New</span>
                        </div>
                        <div class="pro-icn">
                            <a href="#" class="w-c-q-icn">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="#" class="w-c-q-icn">
                                <i class="fa fa-shopping-bag"></i>
                            </a>
                            <a
                            href="javascript:void(0)"
                            class="w-c-q-icn"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fa fa-eye"></i>
                        </a>
                    </div>
                </div>
                <div class="caption">
                    <h3>
                        <a href="#">Peri peri chiken</a>
                    </h3>
                    <div class="rating">
                        <i class="fa fa-star c-star"></i>
                        <i class="fa fa-star c-star"></i>
                        <i class="fa fa-star c-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="pro-price">
                        <span class="new-price">$230.00 USD</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/12.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">South indian palakpaner</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$130.00 USD</span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/13.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Special corn noodels</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$126.00 USD</span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/14.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-20%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Special egypt pasta</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$130.00 USD</span>
                    <span class="old-price">
                        <del>$150.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/15.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Vegetable italian salad</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$117.00 USD</span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/16.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-12%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">West indian onionsalad</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star b-star"></i>
                    <i class="fa fa-star b-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$133.00 USD</span>
                    <span class="old-price">
                        <del>$145.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/1.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-21%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">American mayonise pizza</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$139.00 USD</span>
                    <span class="old-price">
                        <del>$160.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/2.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-10%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Breakfast eggplant special</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$580.00 USD</span>
                    <span class="old-price">
                        <del>$590.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/3.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Canadian chezze salad</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star b-star"></i>
                    <i class="fa fa-star b-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$93.00 USD</span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/4.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-12%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Chiekn burger solid</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star d-star"></i>
                    <i class="fa fa-star d-star"></i>
                    <i class="fa fa-star d-star"></i>
                    <i class="fa fa-star d-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$167.00 USD</span>
                    <span class="old-price">
                        <del>$179.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/5.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Chilly garlic bread</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$230.00 USD</span>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        <div class="swiper-buttons">
            <div class="content-buttons">
                <div
                class="swiper-button-next"
                tabindex="0"
                role="button"
                aria-label="Next slide"
                aria-disabled="false"></div>
                <div
                class="swiper-button-prev swiper-button-disabled"
                tabindex="0"
                role="button"
                aria-label="Previous slide"
                aria-disabled="true"></div>
            </div>
        </div>
        </div>
        <div class="tab-pane fade" id="lunch">
            <div class="home-7-tab swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="h-t-pro">
                            <div class="tred-pro">
                                <div class="tr-pro-img">
                                    <a href="#">
                                        <img src="{{asset('fontend/image/layout-7/6.jpg')}}" class="img-fluid" alt="image">
                                    </a>
                                </div>
                                <div class="Pro-lable">
                                    <span class="p-text">New</span>
                                </div>
                                <div class="pro-icn">
                                    <a href="#" class="w-c-q-icn">
                                        <i class="fa fa-heart"></i>
                                    </a>
                                    <a href="#" class="w-c-q-icn">
                                        <i class="fa fa-shopping-bag"></i>
                                    </a>
                                    <a
                                    href="javascript:void(0)"
                                    class="w-c-q-icn"
                                    data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">
                                    <i class="fa fa-eye"></i>
                                </a>
                            </div>
                        </div>
                        <div class="caption">
                            <h3>
                                <a href="#">South indian palakpaner</a>
                            </h3>
                            <div class="rating">
                                <i class="fa fa-star b-star"></i>
                                <i class="fa fa-star b-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="pro-price">
                                <span class="new-price">$93.00 USD</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="h-t-pro">
                        <div class="tred-pro">
                            <div class="tr-pro-img">
                                <a href="#">
                                    <img src="{{asset('fontend/image/layout-7/7.jpg')}}" class="img-fluid" alt="image">
                                </a>
                            </div>
                            <div class="Pro-lable">
                                <span class="p-discount">-12%</span>
                            </div>
                            <div class="pro-icn">
                                <a href="#" class="w-c-q-icn">
                                    <i class="fa fa-heart"></i>
                                </a>
                                <a href="#" class="w-c-q-icn">
                                    <i class="fa fa-shopping-bag"></i>
                                </a>
                                <a
                                href="javascript:void(0)"
                                class="w-c-q-icn"
                                data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="caption">
                        <h3>
                            <a href="#">Delicius chiken hotdogs</a>
                        </h3>
                        <div class="rating">
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star d-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <div class="pro-price">
                            <span class="new-price">$167.00 USD</span>
                            <span class="old-price">
                                <del>$179.00 USD</del>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="h-t-pro">
                    <div class="tred-pro">
                        <div class="tr-pro-img">
                            <a href="#">
                                <img src="{{asset('fontend/image/layout-7/8.jpg')}}" class="img-fluid" alt="image">
                            </a>
                        </div>
                        <div class="Pro-lable">
                            <span class="p-text">New</span>
                        </div>
                        <div class="pro-icn">
                            <a href="#" class="w-c-q-icn">
                                <i class="fa fa-heart"></i>
                            </a>
                            <a href="#" class="w-c-q-icn">
                                <i class="fa fa-shopping-bag"></i>
                            </a>
                            <a
                            href="javascript:void(0)"
                            class="w-c-q-icn"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal">
                            <i class="fa fa-eye"></i>
                        </a>
                    </div>
                </div>
                <div class="caption">
                    <h3>
                        <a href="#">Desc butter chiken</a>
                    </h3>
                    <div class="rating">
                        <i class="fa fa-star c-star"></i>
                        <i class="fa fa-star c-star"></i>
                        <i class="fa fa-star c-star"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <div class="pro-price">
                        <span class="new-price">$230.00 USD</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/9.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Fryed lupis food</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$130.00 USD</span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/10.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Kathiyavadi Gujarati sandvich</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$126.00 USD</span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/11.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-20%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Peri peri chiken</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$130.00 USD</span>
                    <span class="old-price">
                        <del>$150.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/12.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">South indian palakpaner</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$117.00 USD</span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/13.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-12%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Special corn noodels</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star b-star"></i>
                    <i class="fa fa-star b-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$133.00 USD</span>
                    <span class="old-price">
                        <del>$145.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/14.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-21%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Special egypt pasta</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$139.00 USD</span>
                    <span class="old-price">
                        <del>$160.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/15.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-10%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Vegetable italian salad</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                    <i class="fa fa-star e-star"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$580.00 USD</span>
                    <span class="old-price">
                        <del>$590.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/16.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">West indian onionsalad</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star b-star"></i>
                    <i class="fa fa-star b-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$93.00 USD</span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/1.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-discount">-12%</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">American mayonise pizza</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star d-star"></i>
                    <i class="fa fa-star d-star"></i>
                    <i class="fa fa-star d-star"></i>
                    <i class="fa fa-star d-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$167.00 USD</span>
                    <span class="old-price">
                        <del>$179.00 USD</del>
                    </span>
                </div>
            </div>
        </div>
        </div>
        <div class="swiper-slide">
            <div class="h-t-pro">
                <div class="tred-pro">
                    <div class="tr-pro-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/layout-7/2.jpg')}}" class="img-fluid" alt="image">
                        </a>
                    </div>
                    <div class="Pro-lable">
                        <span class="p-text">New</span>
                    </div>
                    <div class="pro-icn">
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-heart"></i>
                        </a>
                        <a href="#" class="w-c-q-icn">
                            <i class="fa fa-shopping-bag"></i>
                        </a>
                        <a
                        href="javascript:void(0)"
                        class="w-c-q-icn"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa fa-eye"></i>
                    </a>
                </div>
            </div>
            <div class="caption">
                <h3>
                    <a href="#">Breakfast eggplant special</a>
                </h3>
                <div class="rating">
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star c-star"></i>
                    <i class="fa fa-star-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <div class="pro-price">
                    <span class="new-price">$230.00 USD</span>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
        <div class="swiper-buttons">
            <div class="content-buttons">
                <div
                class="swiper-button-next"
                tabindex="0"
                role="button"
                aria-label="Next slide"
                aria-disabled="false"></div>
                <div
                class="swiper-button-prev swiper-button-disabled"
                tabindex="0"
                role="button"
                aria-label="Previous slide"
                aria-disabled="true"></div>
            </div>
        </div>
        </div>
        </div>
        </div>
        </div>
        </div>
</section>
<!-- Our Products Tab end -->
<!-- banner start -->
<section class="banner-7">
    <div class="all-banner">
        <div class="banner-area" style="background-image:url({{asset('fontend/image/product/6.png')}})">
            <div class="article-img-holder"></div>
                    <!-- <div class="banner-grid"> <img src="./image/product/6.png"
                    class="img-fluid" alt="banner-image"> <a href="#" class="btn btn-style3">Shop
                    now</a> </div> -->
                </div>
                <div class="banner-area">
                    <div class="off-banner">
                        <img src="{{asset('fontend/image/product/9.png')}}" class="img-fluid" alt="banner-image">
                        <div class="banner-content">
                            <span class="bannre-title">Breakfast time</span>
                            <h2>We deliver
                                <span class="b-off">italian food your door</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="banner-area" style="background-image:url({{asset('fontend/image/product/7.png')}})">
                        <div class="article-img-holder"></div>
                    <!-- <div class="banner-grid"> <img src="image/product/7.png" class="img-fluid"
                        alt="banner-image"> <a href="#" class="btn btn-style3">Shop now</a> </div> -->
                    </div>
                    <div class="banner-area" style="background-image:url({{asset('fontend/image/product/8.png')}})">
                        <div class="article-img-holder"></div>
                    <!-- <div class="banner-grid"> <img src="image/product/8.png" class="img-fluid"
                        alt="banner-image"> <a href="#" class="btn btn-style3">Shop now</a> </div> -->
                    </div>
                </div>
            </section>
            <!-- banner end -->

            <!-- quick veiw start -->
            <section class="quick-view">
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Product Quick View</h5>
                                <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                            </div>
                            <div class="quick-veiw-area">
                                <div class="quick-image">
                                    <div class="tab-content">
                                        <div class="tab-pane fade show active" id="image-1">
                                            <a href="javascript:void(0)" class="long-img">
                                                <img src="{{asset('fontend/image/pro-page-image/pro-page-image.jpg')}}" class="img-fluid" alt="image">
                                            </a>
                                        </div>
                                        <div class="tab-pane fade show" id="image-2">
                                            <a href="javascript:void(0)" class="long-img">
                                                <img src="{{asset('fontend/image/pro-page-image/3.jpg')}}" class="img-fluid" alt="image">
                                            </a>
                                        </div>
                                        <div class="tab-pane fade show" id="image-3">
                                            <a href="javascript:void(0)" class="long-img">
                                                <img src="{{asset('fontend/image/pro-page-image/4.jpg')}}" class="img-fluid" alt="image">
                                            </a>
                                        </div>
                                        <div class="tab-pane fade show" id="image-4">
                                            <a href="javascript:void(0)" class="long-img">
                                                <img src="{{asset('fontend/image/pro-page-image/5.jpg')}}" class="img-fluid" alt="image">
                                            </a>
                                        </div>
                                        <div class="tab-pane fade show" id="image-5">
                                            <a href="javascript:void(0)" class="long-img">
                                                <img src="{{asset('fontend/image/pro-page-image/6.jpg')}}" class="img-fluid" alt="image">
                                            </a>
                                        </div>
                                        <div class="tab-pane fade show" id="image-6">
                                            <a href="javascript:void(0)" class="long-img">
                                                <img src="{{asset('fontend/image/pro-page-image/7.jpg')}}" class="img-fluid" alt="image">
                                            </a>
                                        </div>
                                        <div class="tab-pane fade show" id="image-7">
                                            <a href="javascript:void(0)" class="long-img">
                                                <img src="{{asset('fontend/image/pro-page-image/8.jp')}}g" class="img-fluid" alt="image">
                                            </a>
                                        </div>
                                        <div class="tab-pane fade show" id="image-8">
                                            <a href="javascript:void(0)" class="long-img">
                                                <img src="{{asset('fontend/image/pro-page-image/8.jpg')}}" class="img-fluid" alt="image">
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="nav nav-tabs quick-slider owl-carousel owl-theme">
                                        <li class="nav-item items">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#image-1"><img src="{{asset('fontend/image/pro-page-image/pro-page-image.jpg')}}" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-2"><img src="{{asset('fontend/image/pro-page-image/3.jpg')}}" class="img-fluid" alt="iamge"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-3"><img src="{{asset('fontend/image/pro-page-image/4.jpg')}}" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-4"><img src="{{asset('fontend/image/pro-page-image/5.jpg')}}" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-5"><img src="{{asset('fontend/image/pro-page-image/6.jpg')}}" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-6"><img src="{{asset('fontend/image/pro-page-image/7.jpg')}}" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-7"><img src="{{asset('fontend/image/pro-page-image/8.jpg')}}" class="img-fluid" alt="image"></a>
                                        </li>
                                        <li class="nav-item items">
                                            <a class="nav-link" data-bs-toggle="tab" href="#image-8"><img src="{{asset('fontend/image/pro-page-image/9.jpg')}}" class="img-fluid" alt="image"></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="quick-caption">
                                    <h4>Fresh organic reachter</h4>
                                    <div class="quick-price">
                                        <span class="new-price">$350.00 USD</span>
                                        <span class="old-price"><del>$399.99 USD</del></span>
                                    </div>
                                    <div class="quick-rating">
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star c-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                    <div class="pro-description">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and</p>
                                    </div>
                                    <div class="pro-size">
                                        <label>Size: </label>
                                        <select>
                                            <option>1 ltr</option>
                                            <option>3 ltr</option>
                                            <option>5 ltr</option>
                                        </select>
                                    </div>
                                    <div class="plus-minus">
                                        <span>
                                            <a href="javascript:void(0)" class="minus-btn text-black">-</a>
                                            <input type="text" name="name" value="1">
                                            <a href="javascript:void(0)" class="plus-btn text-black">+</a>
                                        </span>
                                        <a href="cart.html" class="quick-cart"><i class="fa fa-shopping-bag"></i></a>
                                        <a href="wishlist.html" class="quick-wishlist"><i class="fa fa-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Marter QR Code-->

<!-- <section class="quick-view">
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Marter QR Code </h5>
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a>
                </div>
                

                <div class="">

                    <div class="quick-image">
                        <div class="tab-content">
                            <div class="tab-pane fade show active cus" id="image-1">
                                    <img src="image/msqr.jpg" class="img-fluid" alt="image">
                            </div>
                          
                        </div>
                       
                    </div>
                  
                </div>
            </div>
        </div>
    </div>
</section> -->
<section class="quick-view">
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog bgb">
            <div class="modal-content bgc">
                <div class="modal-header udline">
                    <h5 class="modal-title" id="exampleModalLabel"> </h5>
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round" style="color:#fff;"></i></a>
                </div>
                <!-- <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a> -->

                <div class="">
                    <div class="quick-image">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="image-1">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="{{asset('fontend/image/Mobile.png')}}" class="img-fluid" alt="image">
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Table-->

<section class="quick-view">
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog bgb">
            <div class="modal-content bgc">
                <div class="modal-header udline">
                    <h5 class="modal-title" id="exampleModalLabel"> </h5>
                    <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round" style="color:#fff;"></i></a>
                </div>
                <!-- <a href="javascript:void(0)" data-bs-dismiss="modal" aria-label="Close"><i class="ion-close-round"></i></a> -->

                <div class="">
                    <div class="quick-image">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="image-1">
                                <a href="javascript:void(0)" class="long-img">
                                    <img src="{{asset('fontend/image/Tab.png')}}" class="img-fluid" alt="image">
                                </a>
                            </div>

                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<!-- quick veiw end -->

<!-- home delivery start-->
<section class="home_delivery left-section-t-padding">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-title">
                    <span>Sub Hading</span>
                    <h2>Our Partners Home Delivery Service</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- <div class="col"> </div> -->
            <div class="col-md-3 col-lg-3 col-sm-12">
                <div class="delviery-icon">
                    <a href="">
                        <figure>
                            <img src="{{asset('fontend/image/Resize/1.svg')}}" alt="Foodora">
                        </figure>
                        <div class="icon-hover">
                            <i class="fa fa-share fa-4x"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
                <div class="delviery-icon">
                    <a href="">
                        <figure>
                            <img src="{{asset('fontend/image/Resize/2.svg')}}" alt="Foodora">
                        </figure>
                        <div class="icon-hover">
                            <i class="fa fa-share fa-4x"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
                <div class="delviery-icon">
                    <a href="">
                        <figure>
                            <img src="{{asset('fontend/image/Resize/3.svg')}}" alt="Foodora">
                        </figure>
                        <div class="icon-hover">
                            <i class="fa fa-share fa-4x"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-12">
                <div class="delviery-icon">
                    <a href="">
                        <figure>
                            <img src="{{asset('fontend/image/Resize/4.svg')}}" alt="Foodora">
                        </figure>
                        <div class="icon-hover">
                            <i class="fa fa-share fa-4x"></i>
                        </div>
                    </a>
                </div>
            </div>
            <!-- <div class="col"> </div> -->
        </div>
    </div>
</section>
<!-- home delivery end -->
<!-- testimonial start -->
<section
class="home2-testimonial testimonial2-bg section-tb-padding"
style="background-image: url(./image/Testimonial_BG.png); background-size: cover; ">
<div class="container">
    <div class="row">
        <div class="col">
            <div class="section-title">
                <h2>Our customer say</h2>
            </div>
            <div class="home2-testi owl-carousel owl-theme">
                <div class="items">
                    <div class="testimonial-area">
                        <span class="tsti-title">“Flexibility”</span>
                        <p>“ I love this theme. Higly customizable, Easy to use and very flexible theme.
                            Great support ! Excellent response times. Very professional and helpful in all
                            queries, absolutely awesome. Highly recommended! The theme is really amazing.
                        Thank you Spacingtech Webify.”</p>
                        <div class="testi-name">
                            <h6>By disarak</h6>
                            <span>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="testimonial-area">
                        <span class="tsti-title">“Customer support”</span>
                        <p>“ I love this theme. Higly customizable, Easy to use and very flexible theme.
                            Great support ! Excellent response times. Very professional and helpful in all
                            queries, absolutely awesome. Highly recommended! The theme is really amazing.
                        Thank you Spacingtech Webify.”</p>
                        <div class="testi-name">
                            <h6>By cremica_foods</h6>
                            <span>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="testimonial-area">
                        <span class="tsti-title">“Frendly support”</span>
                        <p>“ I love this theme. Higly customizable, Easy to use and very flexible theme.
                            Great support ! Excellent response times. Very professional and helpful in all
                            queries, absolutely awesome. Highly recommended! The theme is really amazing.
                        Thank you Spacingtech Webify.”</p>
                        <div class="testi-name">
                            <h6>By sametin8</h6>
                            <span>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="testimonial-area">
                        <span class="tsti-title">“Frendly support”</span>
                        <p>“ I love this theme. Higly customizable, Easy to use and very flexible theme.
                            Great support ! Excellent response times. Very professional and helpful in all
                            queries, absolutely awesome. Highly recommended! The theme is really amazing.
                        Thank you Spacingtech Webify.”</p>
                        <div class="testi-name">
                            <h6>By amirzano</h6>
                            <span>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="items">
                    <div class="testimonial-area">
                        <span class="tsti-title">“Design quality”</span>
                        <p>“ I love this theme. Higly customizable, Easy to use and very flexible theme.
                            Great support ! Excellent response times. Very professional and helpful in all
                            queries, absolutely awesome. Highly recommended! The theme is really amazing.
                        Thank you Spacingtech Webify.”</p>
                        <div class="testi-name">
                            <h6>By nestheboza</h6>
                            <span>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                                <i class="fa fa-star e-star"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- testimonial end -->

<!-- Social Media start -->
        <!-- <section class=" "> <div class="container"> <div class="row"> <div
        class="col-lg-2"></div> <div class="col-lg-8"> <a href=""> <img
        src="image/social.jpeg" alt="social_media"> </a> </div> <div
        class="col-lg-lg-2"></div> </div> </div> </section> -->
        <section class="social_media">
            <div class="container cos_cs">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12">
                        <div class="social">
                            <img src="{{asset('fontend/image/social.jpeg')}}" alt="social_media" class="social_page">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Social Media end-->

        <!-- home delivery start-->
        <section class="cl-block table_booking section-bottom-padding"
        style="background-image: url({{asset('fontend/image/bg/1.png')}}); background-size: cover;">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="col-md-5">
                        <div class="hero-inner-block" style="padding: 35px 60px;">
                            <h2>BOOK A TABLE</h2>
                            <form
                            action="https://indiangardenhammarby.se/reservation/request"
                            method="post"
                            enctype="multipart/form-data">
                            <input
                            type="hidden"
                            name="_token"
                            value="yFLx0mWcWKr6Q2V3Dco8Vn1eIXeqVNKuZPsrruGF">
                            <div class="mb-2">
                                <input
                                id="name"
                                name="name"
                                class="form-control"
                                type="text"
                                placeholder="Enter your name">
                            </div>
                            <div class="mb-2">
                                <input
                                id="email"
                                name="email"
                                class="form-control"
                                type="email"
                                placeholder="Enter your email address">
                            </div>
                            <div class="mb-2">
                                <input
                                id="phone"
                                name="phone"
                                class="form-control"
                                type="text"
                                placeholder="Enter your phone number">
                            </div>
                            <div class="mb-2">
                                <div id="picker-no-time"></div>
                                <input type="hidden" id="reservations_date" value=""/>
                            </div>
                            <div class="mb-2">
                                <select name="reservations_time" class="form-control">
                                    <option value="">Select Time</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                    <option value="12:30">12:30</option>
                                    <option value="13:00">13:00</option>
                                    <option value="13:30">13:30</option>
                                    <option value="14:00">14:00</option>
                                    <option value="14:30">14:30</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:30">16:30</option>
                                    <option value="17:00">17:00</option>
                                    <option value="17:30">17:30</option>
                                    <option value="18:00">18:00</option>
                                    <option value="18:30">18:30</option>
                                    <option value="19:00">19:00</option>
                                    <option value="19:30">19:30</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="21:30">21:30</option>
                                    <option value="22:00">22:00</option>
                                </select>
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

@endsection