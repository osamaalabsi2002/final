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