
    <header class="header-area">
        <div class="header-main-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header-main">
                            <!-- logo start -->
                            <div class="header-element logo">
                                <a href="#">
                                    <img  src="{{asset('fontend/image/image/logo/logo/logo/1x/Logo-2.png')}}" 
                                    alt="logo-image"
                                    class="img-fluid">
                                </a>
                            </div>
                            <!-- logo end -->
                            <!-- main menu start -->
                            <div class="header-element megamenu-content">
                                <div class="mainwrap pull-right">
                                    <ul class="main-menu">
                                        <li class="menu-link parent">
                                            <a href="./" class="link-title">
                                                <span class="sp-link-title">Menu</span>
                                            </a>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="{{ route('gallery') }}" class="link-title">
                                                <span class="sp-link-title">Gallery</span>
                                            </a>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="{{ route('about') }}" class="link-title">
                                                <span class="sp-link-title">About us</span>
                                            </a>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="./" class="link-title">
                                                <span class="sp-link-title">Blog</span>
                                            </a>
                                        </li>
                                        <li class="menu-link parent">
                                            <a href="./" class="link-title">
                                                <span class="sp-link-title">Reservation</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- main menu end -->
                            <div class="search-area">
                                <!-- search start -->
                                <!-- <div class="header-element search-wrap"> <input type="text" name="search"
                                placeholder="Search products"> <button class="search-btn" type="button"><i
                                class="fa fa-search"></i></button> </div> -->
                                <!-- search end -->
                                <div class="header-element right-block-box">
                                    <ul class="shop-element">
                                        <li class="side-wrap nav-toggler">
                                            <button
                                            class="navbar-toggler"
                                            type="button"
                                            data-toggle="collapse"
                                            data-target="#navbarContent">
                                            <span class="line"></span>
                                        </button>
                                    </li>
                                    <!-- <li class="side-wrap user-wrap"> <div class="acc-desk"> <div
                                    class="user-icon"> <span><a href="#"><i class="icon-user"></i></a></span> </div>
                                    </div> <div class="acc-mob"> <a href="#" class="user-icon"> <span><i
                                        class="icon-user"></i></span> </a> </div> </li> -->
                                        <li class="side-wrap wishlist-wrap">
                                            <a href="#" class="header-wishlist">
                                                <span class="wishlist-icon">
                                                    <i class="icon-heart"></i>
                                                </span>
                                                <span class="wishlist-counter">0</span>
                                            </a>
                                        </li>
                                        <li class="side-wrap cart-wrap">
                                            <div class="shopping-widget">
                                                <div class="shopping-cart">
                                                    <a href="javascript:void(0)" class="cart-count">
                                                        <span class="cart-icon-wrap">
                                                            <span class="cart-icon">
                                                                <i class="icon-handbag"></i>
                                                            </span>
                                                            <span id="cart-total" class="bigcounter">5</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
        <!-- minicart start -->
        <div class="mini-cart">
            <a href="javascript:void(0)" class="shopping-cart-close">
                <i class="ion-close-round"></i>
            </a>
            <div class="cart-item-title">
                <p>
                    <span class="cart-count-desc">There are</span>
                    <span class="cart-count-item bigcounter">4</span>
                    <span class="cart-count-desc">Products</span>
                </p>
            </div>
            <ul class="cart-item-loop">
                <li class="cart-item">
                    <div class="cart-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/cart-img.jpg')}}" alt="cart-image" class="img-fluid">
                        </a>
                    </div>
                    <div class="cart-title">
                        <h6>
                            <a href="#">Fresh apple 5kg</a>
                        </h6>
                        <div class="cart-pro-info">
                            <div class="cart-qty-price">
                                <span class="quantity">1 x
                                </span>
                                <span class="price-box">$250.00 USD</span>
                            </div>
                            <div class="delete-item-cart">
                                <a href="#">
                                    <i class="icon-trash icons"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/cart-img02.jpg')}}" alt="cart-image" class="img-fluid">
                        </a>
                    </div>
                    <div class="cart-title">
                        <h6>
                            <a href="#">Natural grassbean 4kg</a>
                        </h6>
                        <div class="cart-pro-info">
                            <div class="cart-qty-price">
                                <span class="quantity">1 x
                                </span>
                                <span class="price-box">$300.00 USD</span>
                            </div>
                            <div class="delete-item-cart">
                                <a href="#">
                                    <i class="icon-trash icons"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/cart-img03.jpg')}}" alt="cart-image" class="img-fluid">
                        </a>
                    </div>
                    <div class="cart-title">
                        <h6>
                            <a href="#">Organic coconut juice 5ltr</a>
                        </h6>
                        <div class="cart-pro-info">
                            <div class="cart-qty-price">
                                <span class="quantity">1 x
                                </span>
                                <span class="price-box">$250.00 USD</span>
                            </div>
                            <div class="delete-item-cart">
                                <a href="#">
                                    <i class="icon-trash icons"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="cart-item">
                    <div class="cart-img">
                        <a href="#">
                            <img src="{{asset('fontend/image/cart-img04.jpg')}}" alt="cart-image" class="img-fluid">
                        </a>
                    </div>
                    <div class="cart-title">
                        <h6>
                            <a href="#">Orange juice 5ltr</a>
                        </h6>
                        <div class="cart-pro-info">
                            <div class="cart-qty-price">
                                <span class="quantity">1 x
                                </span>
                                <span class="price-box">$350.00 USD</span>
                            </div>
                            <div class="delete-item-cart">
                                <a href="#">
                                    <i class="icon-trash icons"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
            <ul class="subtotal-title-area">
                <li class="subtotal-info">
                    <div class="subtotal-titles">
                        <h6>Sub total:
                        </h6>
                        <span class="subtotal-price">$750.00 USD</span>
                    </div>
                </li>
                <li class="mini-cart-btns">
                    <div class="cart-btns">
                        <a href="cart.html" class="btn btn-style1">
                            <span>View cart</span></a>
                            <a href="checkout-1.html" class="btn btn-style1">
                                <span>Checkout</span></a>
                    </div>
                </li>
            </ul>
        </div>
        <!-- minicart end -->
        <!-- mobile menu start -->
        <div class="header-bottom-area">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="main-menu-area">
                            <div class="main-navigation navbar-expand-xl">
                                <div class="box-header menu-close">
                                    <button class="close-box" type="button">
                                        <i class="ion-close-round"></i>
                                    </button>
                                </div>
                                <div class="navbar-collapse" id="navbarContent">
                                    <!-- main-menu start -->
                                    <div class="megamenu-content">
                                        <div class="mainwrap">
                                            <ul class="main-menu">
                                                <li class="menu-link">
                                                    <a href="index.php" class="link-title">
                                                        <span class="sp-link-title">Menu</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="gallery.php" class="link-title">
                                                        <span class="sp-link-title">Gallery</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="aboutus.php" class="link-title">
                                                        <span class="sp-link-title">About us</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">Blog</span>
                                                    </a>
                                                </li>
                                                <li class="menu-link">
                                                    <a href="javascript:void(0)" class="link-title">
                                                        <span class="sp-link-title">Reservation</span>
                                                    </a>
                                                </li>
                                    <!-- <li class="menu-link"> <a href="javascript:void(0)" class="link-title">
                                        <span class="sp-link-title">Contact</span> </a> </li> -->
                                    </ul>
                                </div>
                            </div>
                            <!-- main-menu end -->
                        </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
        </div>
        <!-- mobile menu end -->
        <!-- mobile search start -->
        <div class="modal fade" id="r-search-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="m-drop-search">
                            <input type="text" name="search" placeholder="Search products">
                            <button class="search-btn" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal">
                            <i class="ion-close-round"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- mobile search end -->
    </header>