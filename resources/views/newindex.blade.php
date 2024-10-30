<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page | BarberSalon</title>

    <!-- Css Files -->
    <link href="{{ asset('main/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('main/css/font-awesome.css') }}" rel="stylesheet">
<link href="{{ asset('main/css/style.css') }}" rel="stylesheet">

<link href="{{ asset('main/css/owl.carousel.css') }}" rel="stylesheet">
<link href="{{ asset('main/css/color.css') }}" rel="stylesheet">
<link href="{{ asset('main/css/dl-menu.css') }}" rel="stylesheet">
<link href="{{ asset('main/css/flexslider.css') }}" rel="stylesheet">
<link href="{{ asset('main/css/prettyphoto.css') }}" rel="stylesheet">

<link href="{{ asset('main/css/responsive.css') }}" rel="stylesheet">

<style>
    .employee-image {
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .product-image{
        width: 100%;
        height: 250px;
        object-fit: cover;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    </style>

  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]
</head>

<body class="home">

    / Main Wrapper /-->
    <div class="ec-main-wrapper">

        <!--/ Header /-->
        <header id="ec-header" class="ec-header-three">

            <!--/ MainHeader /-->
            <div class="ec-mainheader">
                <div class="container">
                    <div class="row">
                    <div class="col-md-3">
    <a href="{{ url('index.html') }}" class="ec-logo">
        <img src="{{ asset('main/images/sticky-logo.png') }}" alt="">
    </a>
    <a href="{{ url('index.html') }}" class="ec-sticky-logo">
        <img src="{{ asset('main/images/sticky-logo.png') }}" alt="">
    </a>
</div>

                        <div class="col-md-9">
                            <div class="ec-left-section">
                                <nav class="main-navigation">
                                    <ul>
                                        <li><a href="{{url('/indexa')}}">Home</a>
                                            <ul class="as-dropdown">
 
                                            </ul>
                                        </li>
                                        <li><a href="/allTeam">Styler</a>
                                            <ul class="as-dropdown">

                                            </ul>
                                        </li>
                                        <li><a href="service.html">service</a></li>
 
                                        <li><a href="#">Blog</a>
                                            <ul class="as-dropdown">

                                                    <ul class="as-dropdown">
                                                        <li><a href="blog-detail-vimeo.html">Blog Detail W/Video</a></li>
                                                        <li><a href="blog-detail-soundcloud.html">Blog Detail W/Audio</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="/shoplisting">Shop</a>
                                  
                                        </li>
                                        <li>
                                            <ul class="as-dropdown">
                                                <li><a href="booking.html">booking Form</a></li>
                                                <li><a href="price-plane.html">Price Plans</a></li>
                                                <li><a href="#">Gallery</a>
                                                    <ul class="as-dropdown">
                                                        <li><a href="gallery-static.html">Simple Gallery</a></li>
                                                        <li><a href="gallery-static-twcol.html">Simple Gallery 2Column</a></li>
                                                        <li><a href="gallery-static-thcol.html">Simple Gallery 3Column</a></li>
                                                        <li><a href="gallery-video.html">Video Gallery</a></li>
                                                        <li><a href="gallery-video-thcol.html">Video Gallery 3Column</a></li>
                                                        <li><a href="gallery-video-frcol.html">Video Gallery 4Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Team</a>
                                                    <ul class="as-dropdown">
                                                        <li><a href="team-grid.html">Team View One</a></li>
                                                        <li><a href="team-grid-wleft-sidebar.html">Team Grid W/left/Sidebar</a></li>
                                                        <li><a href="team-grid-wright-sidebar.html">Team Grid W/right/Sidebar</a></li>
                                                        <li><a href="team-list-wright-sidebar.html">Team View Two</a></li>
                                                        <li><a href="team-list-wleft-sidebar.html">Team list W/left/Sidebar</a></li>
                                                        <li><a href="team-list-wright-sidebar.html">Team list W/right/Sidebar</a></li>
                                                        <li><a href="team-list.html">Team list Wout/Sidebar</a></li>
                                                        <li><a href="team-detail.html">Team detail</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="service.html">service</a></li>
                                                <li><a href="about-us.html">about</a></li>
                                                <li><a href="shortcode.html">shortcode</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="undercunstruction.html">UnderConstruction</a></li>
                                                <li><a href="contact-us.html">contact us</a>
                                                    <ul class="as-dropdown">
                                                        <li><a href="contact-us.html">Contact Us Style One</a></li>
                                                        <li><a href="contact-us-two.html">Contact Us Style two</a></li>
                                                        <li><a href="contact-us-three.html">Contact Us Style three</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="contact-us.html">contact us</a>

                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <!--// Responsive Menu //-->
                                <div id="as-menu" class="as-menuwrapper">
                                    <button class="as-trigger">Open Menu</button>
                                    <ul class="as-menu">
                                        <li class="active"><a href="index.html">Home</a>
                                            <ul class="as-submenu">
                                                <li><a href="index.html">Header Style One</a></li>
                                                <li><a href="index-two.html">Header Style two</a></li>
                                                <li><a href="index-three.html">Header Style three</a></li>
                                                <li><a href="index.html">Footer Style One</a></li>
                                                <li><a href="index-two.html">Footer Style Two</a></li>
                                                <li><a href="index-three.html">Footer Style Three</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Styler</a>
                                            <ul class="as-submenu">
                                                <li><a href="team-grid.html">Styler View One</a></li>
                                                <li><a href="team-grid-wleft-sidebar.html">Styler Grid W/left/Sidebar</a></li>
                                                <li><a href="team-grid-wright-sidebar.html">Styler Grid W/right/Sidebar</a></li>
                                                <li><a href="team-list-wright-sidebar.html">Styler View Two</a></li>
                                                <li><a href="team-list-wleft-sidebar.html">Styler list W/left/Sidebar</a></li>
                                                <li><a href="team-list-wright-sidebar.html">Styler list W/right/Sidebar</a></li>
                                                <li><a href="team-list.html">Styler list Wout/Sidebar</a></li>
                                                <li><a href="team-detail.html">Styler detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="service.html">service</a></li>
                                        <li><a href="about-us.html">about</a></li>
                                        <li><a href="#">Blog</a>
                                            <ul class="as-submenu">
                                                <li><a href="blog-grid.html">blog Grid Simple</a></li>
                                                <li><a href="blog-grid-woutsidebar.html">blog Grid Simple Wout/sidebar</a></li>
                                                <li><a href="blog-grid-wleft-sidebar.html">blog Grid W/left/sidebar</a></li>
                                                <li><a href="blog-grid-modren.html">blog Grid Modren</a></li>
                                                <li><a href="blog-grid-modren-w-sidebar.html">blog Grid Modren w/sidebar</a></li>
                                                <li><a href="blog-medium.html">blog Medium</a></li>
                                                <li><a href="blog-medium-woutsidebar.html">blog Medium Wout/sidebar</a></li>
                                                <li><a href="blog-medium.html">blog Medium W/sidebar</a></li>
                                                <li><a href="blog-detail.html">blog detail</a>
                                                    <ul class="as-submenu">
                                                        <li><a href="blog-detail-vimeo.html">Blog Detail W/Video</a></li>
                                                        <li><a href="blog-detail-soundcloud.html">Blog Detail W/Audio</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Shop</a>
                                            <ul class="as-submenu">
                                                <li><a href="shop-list.html">Shop List</a></li>
                                                <li><a href="shop-list-w-left-sidebar.html">Shop List w/left/sidebar</a></li>
                                                <li><a href="shop-list-w-right-sidebar.html">Shop List w/right/sidebar</a></li>
                                                <li><a href="shop-list.html">Shop List wout/sidebar</a></li>
                                                <li><a href="shop-detail.html">shop detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Features</a>
                                            <ul class="as-submenu">
                                                <li><a href="booking.html">booking Form</a></li>
                                                <li><a href="price-plane.html">Price Plans</a></li>
                                                <li><a href="#">Gallery</a>
                                                    <ul class="as-submenu">
                                                        <li><a href="gallery-static.html">Simple Gallery</a></li>
                                                        <li><a href="gallery-static-twcol.html">Simple Gallery 2Column</a></li>
                                                        <li><a href="gallery-static-thcol.html">Simple Gallery 3Column</a></li>
                                                        <li><a href="gallery-video.html">Video Gallery</a></li>
                                                        <li><a href="gallery-video-thcol.html">Video Gallery 3Column</a></li>
                                                        <li><a href="gallery-video-frcol.html">Video Gallery 4Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Team</a>
                                                    <ul class="as-submenu">
                                                        <li><a href="team-grid.html">Team View One</a></li>
                                                        <li><a href="team-grid-wleft-sidebar.html">Team Grid W/left/Sidebar</a></li>
                                                        <li><a href="team-grid-wright-sidebar.html">Team Grid W/right/Sidebar</a></li>
                                                        <li><a href="team-list-wright-sidebar.html">Team View Two</a></li>
                                                        <li><a href="team-list-wleft-sidebar.html">Team list W/left/Sidebar</a></li>
                                                        <li><a href="team-list-wright-sidebar.html">Team list W/right/Sidebar</a></li>
                                                        <li><a href="team-list.html">Team list Wout/Sidebar</a></li>
                                                        <li><a href="team-detail.html">Team detail</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="service.html">service</a></li>
                                                <li><a href="about-us.html">about</a></li>
                                                <li><a href="shortcode.html">shortcode</a></li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="undercunstruction.html">UnderConstruction</a></li>
                                                <li><a href="contact-us.html">contact us</a>
                                                    <ul class="as-submenu">
                                                        <li><a href="contact-us.html">Contact Us Style One</a></li>
                                                        <li><a href="contact-us-two.html">Contact Us Style two</a></li>
                                                        <li><a href="contact-us-three.html">Contact Us Style three</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>



                                        
                                            <a href="contact-us.html">contact us</a>







                                            <ul class="as-submenu">
                                                <li><a href="contact-us.html">Contact Us Style One</a></li>
                                                <li><a href="contact-us-two.html">Contact Us Style two</a></li>
                                                <li><a href="contact-us-three.html">Contact Us Style three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!--// Responsive Menu //-->
                            </div>
                            <div class="ec-button-section">




    <a href="{{ route('cart.show') }}" class="ec-cart"> <i class="fa fa-shopping-cart"></i> <span>Cart</span> ({{ session('cart') ? count(session('cart')) : 0 }})
</a>
    
    <!-- Add a container f
     
    
    
    or the user info and logout button -->
    <div class="user-info" style="display: flex; align-items: center;">
        @if (Auth::check())
            <!-- Display user's name and logout button -->
            <span style="margin-right: 10px;">Welcome, {{ Auth::user()->name }}</span>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
                @csrf
                <button type="submit" class="ec-booking-button ec-bgcolorhover" style="border: none; background: none; color: inherit; cursor: pointer;">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </button>
            </form>
        @else
            <!-- Display login button if the user is not logged in -->
            <a href="{{ route('login') }}" class="ec-booking-button ec-bgcolorhover">
                <i class="flaticon-clipboard105"></i> Login
            </a>
        @endif
    </div>
</div>



     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ MainHeader /-->
        </header>

        <!--/ Main Banner /-->
        <div class="ec-mainbanner">
    <div class="flexslider">
        <ul class="slides">
            <li>
            <a href="{{ asset('main/extra-images/banner1.jpg') }}" data-rel="prettyPhoto[gallery1]" title="">
            <img src="{{ asset('main/extra-images/banner1.jpg') }}" alt="dfdsf" />
                <div class="ec-caption">
                    <div class="container">
                        <div class="caption-right-section">
                            <img src="{{ asset('main/extra-images/banner-thumb1.png') }}" alt="">
                        </div>
                        <div class="caption-left-section">
                            <img src="{{ asset('main/extra-images/banner-title.png') }}" alt="">
                            <div class="clearfix"></div>
                            <div class="as-captiontitle">
                                <span>The human mind is a computer, it soaks up information from the hard drives.</span>
                            </div>
                            <div class="clearfix"></div>
                            <a href="#" class="ec-bgcolor">I Want to Order</a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
             <a href="{{ asset('main/extra-images/banner1.jpg') }}" data-rel="prettyPhoto[gallery1]" title="">
    <img src="{{ asset('main/extra-images/banner1.jpg') }}" alt="" />
</a>
                <div class="ec-caption ec-right-caption">
                    <div class="container">
                        <div class="caption-right-section">
                            <img src="{{ asset('main/extra-images/banner-thumb2.png') }}" alt="">
                        </div>
                        <div class="caption-left-section">
                            <img src="{{ asset('main/extra-images/banner-title.png') }}" alt="">
                            <div class="clearfix"></div>
                            <div class="as-captiontitle">
                                <span>The human mind is a computer, it soaks up information from the hard drives.</span>
                            </div>
                            <div class="clearfix"></div>
                            <a href="#" class="ec-bgcolor">I Want to Order</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>

        <!--/ Main Banner /-->

        <!--/ Main Content /-->
        <div class="ec-main-content">

            <!--/ Main Section /-->
            <div class="ec-main-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="ec-fancy-title ec-with-strip">
                                <h2>Special Services</h2>
                                <img src="images/title-strip.png" alt="">
                                <div class="clearfix"></div>
                                <p>It was the perfect event for Dane Hesse, aka ‘Pig Barber,’ to demonstrate his unique barbering skills.</p>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="ec-services ec-hexagon-view">
                                <ul class="row">
                                    <li class="col-md-3">
                                        <div class="hexagon"> <i class="fa fa-globe"></i> <span></span></div>
                                        <h5>Many Payment Methods</h5>
                                        <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis convallis</p>
                                        <a href="#" class="ec-color"><span class="fa fa-circle"></span> <span class="fa fa-circle"></span> <span class="fa fa-circle"></span></a>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="hexagon"> <i class="fa fa-h-square"></i> <span></span></div>
                                        <h5>Worldwide Delivery</h5>
                                        <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis convallis</p>
                                        <a href="#" class="ec-color"><span class="fa fa-circle"></span> <span class="fa fa-circle"></span> <span class="fa fa-circle"></span></a>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="hexagon"> <i class="fa fa-hand-grab-o"></i> <span></span></div>
                                        <h5>Tailored to your needs</h5>
                                        <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis convallis</p>
                                        <a href="#" class="ec-color"><span class="fa fa-circle"></span> <span class="fa fa-circle"></span> <span class="fa fa-circle"></span></a>
                                    </li>
                                    <li class="col-md-3">
                                        <div class="hexagon"> <i class="fa fa-globe"></i> <span></span></div>
                                        <h5>Premium Quality Items</h5>
                                        <p>Eleifend lobortis bibendum volutpat est senectus duis convallis augue hendrerit senectus duis convallis</p>
                                        <a href="#" class="ec-color"><span class="fa fa-circle"></span> <span class="fa fa-circle"></span> <span class="fa fa-circle"></span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Main Section /-->

            <!--/ Main Section /-->
            <div class="ec-main-section not-fullscreen background parallax ec-ecabout-full" data-img-width="1920" data-img-height="224" data-diff="100">
    <span class="ec-transparent-bg"></span>
    <div class="container">
        <div class="row">
            <div class="col-md-6 ec-white-info">
                <div class="ec-content-title">
                    <h2>About us</h2>
                </div>
                <p>Fusce placerat mollis tellus ut porta. Cras efficitur consequat massa sit amet hendrerit. Cras posuere mi quis leo commodo egestas. Sed porta pulvinar nisl, quis mollis risus ultrices vitae. Morbi interdum..<br /> leo at pulvinar
                    tempor, magna quam venenatis dolor, vitae luctus erat arcu at erat. Vestibulum non semper ex. Nunc egestas dui et sagittis rutrum.</p>
                <div class="ec-custom-button">
         
                </div>
            </div>
            <div class="col-md-6 ec-white-info">
                <div class="ec-content-title">
                    <h2>Popular Hairstyle</h2>
                </div>
                <div class="ec-team ec-simple-team">
                    <ul class="row gallery">
                        <li class="col-md-4">
                            <figure>
                                <a href="#">
                                    <img src="{{ asset('main/extra-images/bussy-team-1.jpg') }}" alt="">
                                </a>
                                <figcaption>
                                    <ul>
                                        <li>
                                            <a href="{{ asset('main/extra-images/galleryfour-1.jpg') }}" data-rel="prettyPhoto[gallery1]" title="" class="fa fa-plus"></a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <h6><a href="team-detail.html">Hair Treatment</a></h6>
                        </li>
                        <li class="col-md-4">
                            <figure>
                                <a href="#">
                                    <img src="{{ asset('main/extra-images/bussy-team-2.jpg') }}" alt="">
                                </a>
                                <figcaption>
                                    <ul>
                                        <li>
                                            <a href="{{ asset('main/extra-images/galleryfour-1.jpg') }}" data-rel="prettyPhoto[gallery1]" title="" class="fa fa-plus"></a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <h6><a href="#">Hair Cutting</a></h6>
                        </li>
                        <li class="col-md-4">
                            <figure>
                                <a href="team-detail.html">
                                    <img src="{{ asset('main/extra-images/bussy-team-3.jpg') }}" alt="">
                                </a>
                                <figcaption>
                                    <ul>
                                        <li>
                                            <a href="{{ asset('main/extra-images/galleryfour-1.jpg') }}" data-rel="prettyPhoto[gallery1]" title="" class="fa fa-plus"></a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <h6><a href="team-detail.html">Beard Triming</a></h6>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

            <!--/ Main Section /-->

            <!--/ Main Section /-->
            <div class="ec-main-section ec-team-full">
    <div class="container">
        <div class="row">
            <!-- Title Section -->
            <div class="col-md-12">
                <div class="ec-fancy-title ec-with-strip">
                    <h2>Our Creative Team</h2>
                    <div class="ec-custom-button">
    <a style="background-color: #999999" href ="{{ route('allTeam') }}">Show all Styler</a>
</div>

                    <div class="clearfix"></div>
                    <p>Roman Empire, razors had began to modernise; they were designed like a half-moon at first</p>
                </div>
            </div>
            









            
            <!-- Team Section -->
            <div class="col-md-12">
                <div class="ec-team ec-modren-team">
                    <ul class="row">
                        <!-- Loop through employees -->
                  
                        @foreach ($employees as $employee)
<li class="col-md-3">
    <div class="ec-team-wrapper">
        <figure>
            <!-- Link to the individual employee's detail page -->
            <a href="{{ url('team/' . $employee->id) }}">
                <!-- Employee Image with uniform style -->
                <img src="{{ asset('img/' . $employee->image) }}" alt="{{ $employee->first_name }} {{ $employee->last_name }}" class="employee-image">
            </a>
        </figure>
        <!-- Employee Info -->
        <section class="ec-team-info">
            <h5><a href="#">{{ $employee->first_name }} {{ $employee->last_name }}</a></h5>
            <span>{{ $employee->position }}</span>
            <!-- Social Media Links (can be customized) -->
            <ul>
                <li><a href="#" class="fa fa-twitter"></a></li>
                <li><a href="#" class="fa fa-google-plus"></a></li>
                <li><a href="#" class="fa fa-linkedin"></a></li>
            </ul>
            <a class="ec-next-button" href="#"><i class="fa fa-angle-right"></i></a>
        </section>
    </div>
</li>
@endforeach


<!-- Add pagination links -->


                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


            <!--/ Main Section /-->

            <!--/ Main Section /-->
            <div class="ec-main-section not-fullscreen background parallax ec-counter-full" data-img-width="1920" data-img-height="224" data-diff="100">
                <span class="ec-transparent-bg"></span>
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
    <div class="ec-counter">
        <ul class="row">
            <li class="col-md-3">
                <i class="fa fa-angellist"></i>
                <div class="ec-counter-info">
                    <span class="word-count">{{ $userCount }}</span>
                    <small>Clients</small>
                </div>
            </li>
            <li class="col-md-3">
                <i class="fa fa-android"></i>
                <div class="ec-counter-info">
                    <span class="word-count">{{ $productCount }}</span>
                    <small>Products Available</small>
                </div>
            </li>
            <li class="col-md-3">
                <i class="fa fa-archive"></i>
                <div class="ec-counter-info">
                    <span class="word-count">{{ $employeeCount }}</span>
                    <small>Employees</small>
      
                </div>
            </li>
        </ul>
    </div>
</div>


                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Main Section /-->

            <!--/ Main Section /-->
            <div class="ec-main-section ec-blog-full">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="ec-fancy-title ec-with-strip">
                    <h2>Latest News Blog</h2>
                    <img src="{{ asset('main/extra-images/title-strip.png') }}" alt="">
                    <div class="clearfix"></div>
                    <p>Roman Empire, razors had began to modernise; they were designed like a half-moon at first</p>
                </div>
                <!--/ BlogMedium /-->
                <div class="ec-blog ec-blog-medium ec-flipgrid">
                    <ul class="row">
                        <li class="col-md-4">
                            <div class="ec-blog-wrap">
                                <figure class="ec-blog-thumb">
                                    <a href="{{ url('blog-detail.html') }}">
                                        <img src="{{ asset('main/extra-images/blog-medium-1.jpg') }}" alt="">
                                    </a>
                                    <figcaption>
                                        <div class="ec-blog-button">
                                            <a href="{{ url('blog-detail.html') }}" class="ec-bgcolorhover">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="{{ url('blog-detail.html') }}" class="ec-bgcolorhover">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </figcaption>
                                </figure>
                                <section class="ec-blog-info">
                                    <div class="blog-info-inner">
                                        <h4><a href="{{ url('blog-detail.html') }}">Bluebeards Shavette</a></h4>
                                        <p>Choosing scissors or shears that are right for you is essential, as they become an extension of your hand and start reflecting on the type of a lifetime given that you take..<a href="{{ url('blog-detail.html') }}" class="ec-colorhover">Read more</a></p>
                                        <div class="ec-author-thumb">
                                            <img src="{{ asset('main/extra-images/medium-thumb1.jpg') }}" alt="">
                                            By <a href="#" class="ec-colorhover">John Dimichelle</a>
                                        </div>
                                    </div>
                                    <ul class="ec-blogoption">
                                        <li><a href="#"><i class="fa fa-eye"></i> 172 Views</a></li>
                                        <li><a href="#"><i class="fa fa-comment"></i> 34</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i> 210 Like</a></li>
                                    </ul>
                                </section>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="ec-blog-wrap">
                                <figure class="ec-blog-thumb">
                                    <a href="{{ url('blog-detail.html') }}">
                                        <img src="{{ asset('main/extra-images/blog-medium-2.jpg') }}" alt="">
                                    </a>
                                    <figcaption>
                                        <div class="ec-blog-button">
                                            <a href="{{ url('blog-detail.html') }}" class="ec-bgcolorhover">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="{{ url('blog-detail.html') }}" class="ec-bgcolorhover">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </figcaption>
                                </figure>
                                <section class="ec-blog-info">
                                    <div class="blog-info-inner">
                                        <h4><a href="{{ url('blog-detail.html') }}">The Perfect Shave</a></h4>
                                        <p>Choosing scissors or shears that are right for you is essential, as they become an extension of your hand and start reflecting on the type of a lifetime given that you take..<a href="{{ url('blog-detail.html') }}" class="ec-colorhover">Read more</a></p>
                                        <div class="ec-author-thumb">
                                            <img src="{{ asset('main/extra-images/medium-thumb1.jpg') }}" alt="">
                                            By <a href="#" class="ec-colorhover">John Dimichelle</a>
                                        </div>
                                    </div>
                                    <ul class="ec-blogoption">
                                        <li><a href="#"><i class="fa fa-eye"></i> 172 Views</a></li>
                                        <li><a href="#"><i class="fa fa-comment"></i> 34</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i> 210 Like</a></li>
                                    </ul>
                                </section>
                            </div>
                        </li>
                        <li class="col-md-4">
                            <div class="ec-blog-wrap">
                                <figure class="ec-blog-thumb">
                                    <a href="{{ url('blog-detail.html') }}">
                                        <img src="{{ asset('main/extra-images/blog-medium-3.jpg') }}" alt="">
                                    </a>
                                    <figcaption>
                                        <div class="ec-blog-button">
                                            <a href="{{ url('blog-detail.html') }}" class="ec-bgcolorhover">
                                                <i class="fa fa-expand"></i>
                                            </a>
                                            <a href="{{ url('blog-detail.html') }}" class="ec-bgcolorhover">
                                                <i class="fa fa-search"></i>
                                            </a>
                                        </div>
                                    </figcaption>
                                </figure>
                                <section class="ec-blog-info">
                                    <div class="blog-info-inner">
                                        <h4><a href="{{ url('blog-detail.html') }}">Manners Barber Shop</a></h4>
                                        <p>Choosing scissors or shears that are right for you is essential, as they become an extension of your hand and start reflecting on the type of a lifetime given that you take..<a href="{{ url('blog-detail.html') }}" class="ec-colorhover">Read more</a></p>
                                        <div class="ec-author-thumb">
                                            <img src="{{ asset('main/extra-images/medium-thumb1.jpg') }}" alt="">
                                            By <a href="#" class="ec-colorhover">John Dimichelle</a>
                                        </div>
                                    </div>
                                    <ul class="ec-blogoption">
                                        <li><a href="#"><i class="fa fa-eye"></i> 172 Views</a></li>
                                        <li><a href="#"><i class="fa fa-comment"></i> 34</a></li>
                                        <li><a href="#"><i class="fa fa-heart"></i> 210 Like</a></li>
                                    </ul>
                                </section>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--/ BlogMedium /-->
            </div>

        </div>
    </div>
</div>

            <!--/ Main Section /-->

            <!--/ Main Section /-->
            <div class="ec-main-section not-fullscreen background parallax ec-testimonial-full" data-img-width="1920" data-img-height="400" data-diff="100">
                <span class="ec-transparent-bg"></span>
                <div class="container">
                    <div class="row">

                        <div class="col-md-4 ec-white-info">
                            <div class="ec-content-title">
                                <h2> Clients</h2>
                            </div>
                            <p>Fusce placerat mollis tellus ut porta. Cras efficitur consequat massa sit amet hendrerit. Cras posuere mi quis leo commodo egestas. Sed porta pulvinar nisl, quis mollis risus ultrices vitae. Cras posuere mi quis leo commodo
                                egestas.</p>
                            <div class="ec-custom-button">
                     
                            </div>
                        </div>
                        <div class="col-md-4">

                            <!--/ Grid Testimonial /-->
                            <div class="ec-grid-testimonial">
                                <p>Fusce placerat mollis tellus ut porta. Cras efficitur consequat massa sit amet hendrerit. Cras posuere mi quis leo commodo egestas. Sed porta pulvinar nisl, quis mollis risus ultrices vitae. Morbi interdum,,</p>
                                <figure>
                                    <img src="extra-images/teatimonial-widget-1.jpg" alt="">
                                    <h6>Abdin Wilson</h6>
                                </figure>
                            </div>
                            <!--/ Grid Testimonial /-->

                        </div>

                        <div class="col-md-4">

                            <!--/ Grid Testimonial /-->
                            <div class="ec-grid-testimonial">
                                <p>Fusce placerat mollis tellus ut porta. Cras efficitur consequat massa sit amet hendrerit. Cras posuere mi quis leo commodo egestas. Sed porta pulvinar nisl, quis mollis risus ultrices vitae. Morbi interdum,,</p>
                                <figure>
                                    <img src="extra-images/testimonial-thumb.jpg" alt="">
                                    <h6>Allen Vega</h6>
                                </figure>
                            </div>
                            <!--/ Grid Testimonial /-->

                        </div>

                    </div>
                </div>
            </div>
            <!--/ Main Section /-->

            <!--/ Main Section /-->
            <div class="ec-main-section ec-shop-full">
    <div class="container">
        <div class="row">
            <!-- Title Section -->
            <div class="col-md-12">
                <div class="ec-fancy-title ec-with-strip">
                    <h2>Latest Shop</h2>
                    <div class="ec-custom-button">
                    <a style="background-color: #999999" href ="{{'/shoplisting'}}">Show all products</a>
                
            
                    <div class="clearfix"></div>
                    <p>Modern day barbers can create men’s hairstyles using electric clippers, razor-sharp cutting</p>
                </div>
            </div>

            <!-- Products Section -->
            <div class="col-md-12">
                <div class="ec-shop ec-shop-list">
                    <ul class="row">
                        <!-- Loop through products -->
                        @foreach ($products as $product)
    <li class="col-md-3">
        <div class="e-shop-wrap">
            <figure>
                <!-- Link to the individual product's detail page -->
                <a href="{{ url('Shopdetail/product/' . $product->id) }}" class="ec-shop-thumb">
                    <!-- Product Image -->
                    <img src="{{ asset('img/' . $product->image1) }}" alt="{{ $product->name_products }}" class="product-image">
                </a>
                @if($product->price < 50) <!-- Example condition to show sale tag -->
                   
                @endif
                <figcaption>
                    <a href="{{ url('Shopdetail/product/' . $product->id) }}" class="fa fa-plus"></a>
                </figcaption>
            </figure>
            <div class="ec-shopinfo">
                <h6><a href="{{ url('Shopdetail/product/' . $product->id) }}">{{ $product->name_products }}</a></h6>
                <div class="ec-rating-section">
                    <div class="ec-rating">
                        <span class="rating-box" style="width:47%"></span>
                    </div>
                    <span class="ec-reviews">245 Reviews</span>
                </div>
                <a href="#" class="ec-cartbtn">
                    <i class="fa fa-cart-plus"></i> Add to Cart
                </a>
                <span class="ec-price"><small>$</small>{{ $product->price }}.<span>00</span></span>
            </div>
        </div>
    </li>
@endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


            <!--/ Main Section /-->

            <!--/ Main Section /-->
            <div class="ec-main-section not-fullscreen background parallax ec-action-full" data-img-width="1920" data-img-height="204" data-diff="100">
                <span class="ec-transparent-bg"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 ec-white-info">
                            <div class="ec-content-title">
                                <h2>Opening Hours</h2>
                            </div>
                            <p>Fusce placerat mollis tellus ut porta. Cras efficitur consequat massa sit amet hendrerit. Cras posuere mi quis leo commodo egestas. Sed porta pulvinar nisl, quis mollis risus ultrices vitae. Cras posuere mi quis leo commodo
                                egestas.</p>
                            <div class="ec-custom-button">
                          
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="ec-opining-hour">
                                <ul class="row">
                                    <li class="col-md-4">
                                        <div class="opining-hout-wrap">
                                            <h4>MON</h4>
                                            <span>08:00-15:00</span>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <div class="opining-hout-wrap">
                                            <h4>TUE</h4>
                                            <span>10.00-16.00</span>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <div class="opining-hout-wrap">
                                            <h4>Wed</h4>
                                            <span>08:00-15:00</span>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <div class="opining-hout-wrap">
                                            <h4>THU</h4>
                                            <span>08:00-18:00</span>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <div class="opining-hout-wrap">
                                            <h4>Fri</h4>
                                            <span>07:00-19:00</span>
                                        </div>
                                    </li>
                                    <li class="col-md-4">
                                        <div class="opining-hout-wrap">
                                            <h4>Sat+Sun</h4>
                                            <span>CLOSED</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Main Section /-->

            <!--/ Main Section /-->
            <div class="ec-main-section" style=" padding: 50px 0px 50px 0px; ">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ec-content-title">
                                <h2>Popular Styles</h2>
                            </div>
                            <ul class="row contact-gallery gallery">
                            <li class="col-md-4">
    <a href="{{ asset('main/extra-images/galleryfour-1.jpg') }}" data-rel="prettyPhoto[gallery1]" title="">
        <img src="{{ asset('main/extra-images/bussy-team-1.jpg') }}" alt="">
    </a>
</li>
<li class="col-md-4">
    <a href="{{ asset('main/extra-images/galleryfour-1.jpg') }}" data-rel="prettyPhoto[gallery1]" title="">
        <img src="{{ asset('main/extra-images/bussy-team-2.jpg') }}" alt="">
    </a>
</li>
<li class="col-md-4">
    <a href="{{ asset('main/extra-images/galleryfour-1.jpg') }}" data-rel="prettyPhoto[gallery1]" title="">
        <img src="{{ asset('main/extra-images/bussy-team-3.jpg') }}" alt="">
    </a>
</li>
<li class="col-md-4">
    <a href="{{ asset('main/extra-images/galleryfour-1.jpg') }}" data-rel="prettyPhoto[gallery1]" title="">
        <img src="{{ asset('main/extra-images/bussy-team-4.jpg') }}" alt="">
    </a>
</li>
<li class="col-md-4">
    <a href="{{ asset('main/extra-images/galleryfour-1.jpg') }}" data-rel="prettyPhoto[gallery1]" title="">
        <img src="{{ asset('main/extra-images/bussy-team-5.jpg') }}" alt="">
    </a>
</li>
<li class="col-md-4">
    <a href="{{ asset('main/extra-images/galleryfour-1.jpg') }}" data-rel="prettyPhoto[gallery1]" title="">
        <img src="{{ asset('main/extra-images/bussy-team-6.jpg') }}" alt="">
    </a>
</li>

                            </ul>
                        </div>
                        <div class="col-md-6">
                            <div class="ec-content-title">
                                <h2>Top Prices</h2>
                            </div>
                            <div class="ec-topprices">
                                <ul>
                                    <li>Trim your Hair <span>from $40</span></li>
                                    <li>Trim your Beard <span>from $15</span></li>
                                    <li>Special Beard Treatment <span>from $59</span></li>
                                    <li>Color your Beard <span>from $69</span></li>
                                    <li>Wax your Beard <span>from $12</span></li>
                                    <li>Complete Treatment <span>from $99</span></li>
                                    <li>Trim your Beard <span>from $15</span></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Main Section /-->

            <!--/ Main Section /-->
            <div class="ec-main-section not-fullscreen background parallax ec-action-full" data-img-width="1920" data-img-height="204" data-diff="100">
                <span class="ec-transparent-bg"></span>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ec-parallex-info">
                            <h6>Thank You For Visit My Web Site</h6>
                            <div class="ec-custom-button">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Main Section /-->

        </div>
        <!--/ Main Content /-->

        <!--/ Footer /-->
        <footer id="ec-footer" class="ec-footer-three">

            <!--/ Footer Widget /-->
            <div class="ec-footer-widget">
                <div class="container">
                    <div class="row">
                        <!--/ Widget Contact /-->
                        <div class="col-md-3 widget widget_categories">
                            <div class="ec-main-title">
                                <h2>Quick Likns</h2>
                            </div>
                            <ul>
                                <li><a href="#"><i class="flaticon-hairsalon2"></i> Barber Equipment</a> 120</li>
                                <li><a href="#"><i class="flaticon-school50"></i> Barber Schools</a> 25</li>
                                <li><a href="#"><i class="flaticon-baber"></i> Barber Supplies</a> 50</li>
                                <li><a href="#"><i class="flaticon-barber1"></i> Barber Techniques</a> 200</li>
                                <li><a href="#"><i class="flaticon-scissor8"></i> Barber Tools</a> 100</li>
                            </ul>
                        </div>
                        <!--/ Widget Contact /-->
                        <!--/ Widget Gallery /-->
                        <div class="widget col-md-3 widget_gallery">
                            <div class="ec-main-title">
                                <h2>Flickr Photos</h2>
                            </div>
                            <ul class="gallery">
                                <li><a href="extra-images/blog-medium-2.jpg" data-rel="prettyPhoto[gallery1]" title=""><img src="extra-images/flicker-widget-1.jpg" alt=""></a></li>
                                <li><a href="extra-images/blog-medium-2.jpg" data-rel="prettyPhoto[gallery1]" title=""><img src="extra-images/flicker-widget-2.jpg" alt=""></a></li>
                                <li><a href="extra-images/blog-medium-2.jpg" data-rel="prettyPhoto[gallery1]" title=""><img src="extra-images/flicker-widget-3.jpg" alt=""></a></li>
                                <li><a href="extra-images/blog-medium-2.jpg" data-rel="prettyPhoto[gallery1]" title=""><img src="extra-images/flicker-widget-4.jpg" alt=""></a></li>
                                <li><a href="extra-images/blog-medium-2.jpg" data-rel="prettyPhoto[gallery1]" title=""><img src="extra-images/flicker-widget-5.jpg" alt=""></a></li>
                                <li><a href="extra-images/blog-medium-2.jpg" data-rel="prettyPhoto[gallery1]" title=""><img src="extra-images/flicker-widget-6.jpg" alt=""></a></li>
                            </ul>
                        </div>
                        <!--/ Widget Gallery /-->
                        <div class="widget col-md-6 widget_newslatters">
                            <div class="ec-main-title">
                                <h2>Newsletter</h2>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <form>
                                <ul>
                                    <li><input type="text" required="" name="usrname" placeholder="Your Name"></li>
                                    <li><input type="text" required="" name="email" placeholder="Email Address"></li>
                                    <li><span><i class="fa fa-info"></i> you will be safe we do not sell your email! </span><input type="submit" value="Subscribe Now" class="as-bgcolor"></li>
                                </ul>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Footer Widget /-->
            <div class="ec-bottom-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="ec-copyright">
                                <p>2015 BarberSaloon, All Right Reserved <a href="#" class="ec-color">EyeCix</a></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="ec-social-network">
                                <h6>Fallow us</h6>
                                <ul>
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-twitter"></a></li>
                                    <li><a href="#" class="fa fa-google-plus"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                            <a href="#" class="backtop-btn"><img src="images/back-top.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
        <!--/ Footer /-->

        <div class="clearfix"></div>
    </div>
    <!--/ Main Wrapper /-->

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="{{ asset('main/script/jquery.min.js') }}"></script>
<script src="{{ asset('main/script/modernizr.js') }}"></script>
<script src="{{ asset('main/script/bootstrap.min.js') }}"></script>
<script src="{{ asset('main/script/jquery.dlmenu.js') }}"></script>
<script src="{{ asset('main/script/flexslider-min.js') }}"></script>
<script src="{{ asset('main/script/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('main/script/jquery.prettyphoto.js') }}"></script>
<script src="{{ asset('main/script/waypoints-min.js') }}"></script>
<script src="{{ asset('main/script/owl.carousel.min.js') }}"></script>
<script src="{{ asset('main/script/fitvideo.js') }}"></script>
<script src="{{ asset('main/script/functions.js') }}"></script>

<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

<!-- Flexslider JS -->
<script src="{{ asset('js/jquery.flexslider.js') }}"></script>

</body>

</html>