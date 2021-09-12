<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- title -->
    <title>@yield('title') | {{ config('app.name', 'HappyFood') }}</title>
    <meta
    name="description"
    content="A best clean, modern, stylish, creative, responsive theme for different eCommerce business or industries."/>
    <meta name="keywords" content="organic food theme, vegetables, foof store, eCommerce html template, responsive, electronics store, furniture wood, fashion, furniture, mobile, watches, electronics, computers accessories, toys, jewellery, restaurant accessories"/>
    <meta name="author" content="spacingtech_webify">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/favicon" href="{{asset('fontend/./image/image/logo/logo/logo/1x/Logo-5.png')}}">
    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/bootstrap.min.css')}}">
    <!-- simple-line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/simple-line-icons.css')}}">
    <!-- font-awesome icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/font-awesome.min.css')}}">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/themify-icons.css')}}">
    <!-- ion icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/ionicons.min.css')}}">
    <!-- owl slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/owl.theme.default.min.css')}}">
    <!-- swiper -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/swiper.min.css')}}">
    <!-- animation -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/animate.css')}}">
    <!-- style -->
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/style7.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/s.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/style_cus.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fontend/css/responsive7.css')}}">
    <link href="{{asset('fontend/datetime/css/datetimepicker.css')}}" rel="stylesheet" type="text/css"/>
    @yield('css')
    <link href="{{asset('fontend/css/digimo.css')}}" rel="stylesheet" type="text/css"/>
</head>

<body class="home-7">
    <div class="preloader">
        <div class="content">
            <img src="{{asset('fontend/image/preoloder/1.gif')}}" alt="Happyfood">
        </div>
        
    </div>
    <!-- top notificationbr start -->
    @include('website.partials.top')
    <!-- top notificationbr start -->
    <!-- header start -->
    @include('website.partials.header')
    <!--header end-->
    <!--home page slider start-->
    @yield('content')
    <!-- home delivery end -->

<!-- footer start -->
@include("website.partials.footer")
<!-- footer end -->
<!-- copyright start -->
@include("website.partials.copyright")
<!-- copyright end -->
<!-- back to top start -->
<a href="javascript:void(0)" class="scroll" id="top">
    <span>
        <i class="fa fa-angle-double-up"></i>
    </span>
</a>
<!-- back to top end -->
<div class="mm-fullscreen-bg"></div>

<div class="book-now-wrapper cl-block">
    <p class="toggle">Reservation</p>
    <div class="book-now ">
        <div class="book-form">
            <p>free &amp; instant online restaurant reservations</p>
            <form action="#" method="post" enctype="multipart/form-data">
                <input
                type="hidden"
                name="_token"
                value="Yd8onzcMnpIBcbbA5b4WQ1oiOYVZXSSZ01Mw6uPs">
                <div class="col-xs-12 col-sm-12">
                    <input class="form-control" type="text" name="name" placeholder="name">
                </div>
                <div class="col-xs-12 col-sm-12">
                    <input
                    id="email-sidebar"
                    class="form-control"
                    type="email"
                    name="email"
                    placeholder="E-mail">
                </div>
                <div class="col-xs-12 col-sm-12">
                    <input
                    id="phone-sidebar"
                    class="form-control"
                    type="text"
                    name="phone"
                    placeholder="Phone Number">
                </div>
                <div class="col-xs-12 col-sm-12">
                    <input
                    id="datepicker-sidebar"
                    class="form-control hasDatepicker"
                    type="text"
                    name="reservations_date"
                    placeholder="date">
                </div>
                <div class="col-xs-12 col-sm-12">
                    <select name="reservations_time" class="form-control">
                        <option value="">Select Date First</option>
                    </select>

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
                <input type="hidden" name="reservations_status" value="Pending">
                <div class="col-xs-12 col-sm-12">
                    <textarea
                    class="form-control"
                    rows="3"
                    name="message"
                    placeholder="message &amp; special request"></textarea>
                </div>
                <div class="form-group col-xs-12">
                    <div id="sidebar_mail_success" class="success" style="display:none;">Your message has been sent successfully.
                    </div>
                    <div id="sidebar_mail_fail" class="error" style="display:none;">
                        Sorry, error occured this time sending your message.
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12">
                    <button class="btn" type="submit">make a reservation</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- back to top start -->
<a href="javascript:void(0)" class="scroll" id="top">
    <span>
        <i class="fa fa-angle-double-up"></i>
    </span>
</a>
<!-- back to top end -->
<!-- jquery -->

<script src="{{asset('fontend/js/modernizr-2.8.3.min.js')}}"></script>
<script src="{{asset('fontend/js/jquery-3.6.0.min.js')}}"></script>
<!-- bootstrap -->
<script src="{{asset('fontend/js/bootstrap.min.js')}}"></script>

<!-- popper -->
<script src="{{asset('fontend/js/popper.min.js')}}"></script>
<!-- fontawesome -->
<script src="{{asset('fontend/js/fontawesome.min.js')}}"></script>
<!-- owl carousal -->
<script src="{{asset('fontend/js/owl.carousel.min.js')}}"></script>
<!-- swiper -->
<script src="{{asset('fontend/js/swiper.min.js')}}"></script>
{{-- video Gallery --}}
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- custom -->
<script src="{{asset('fontend/js/custom.js')}}"></script>
<script src="{{asset('fontend/js/script.js')}}"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"
integrity="sha512-LGXaggshOkD/at6PFNcp2V2unf9LzFq6LE+sChH7ceMTDP0g2kn6Vxwgg7wkPP7AAtX+lmPqPdxB47A0Nz0cMQ=="
crossorigin="anonymous"></script>
<script type="text/javascript" src="{{asset('fontend/datetime/js/datetimepicker.js')}}"></script>
@yield('js')
<script type="text/javascript">
    $(document).ready(function () {
        $('#picker').dateTimePicker({
            selectData: "now",
            positionShift: {
                top: 20,
                left: 0
            },
            title: "Select Date and Time",
            buttonTitle: "Select"
        });
        $('#picker-no-time').dateTimePicker(
            {showTime: false, dateFormat: 'DD/MM/YYYY', title: 'Select Date'}
            );
    })
    $(function () {
                // BOOK A TABLE NOW
                $(".book-now-wrapper .toggle").on("click", function () {
                    $(".book-now").toggleClass("open", 150);
                });
            });
        </script>

    </body>

    </html>

    </html>