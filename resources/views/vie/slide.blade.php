<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from www.innovationplans.com/idesign/vie1/vie-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Oct 2021 07:57:11 GMT -->
<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="keywords" content="HTML5 Template Vie onepage themeforest" />
    <meta name="description" content="Vie - Onepage Multi-Purpose HTML5 Template" />
    <meta name="author" content="" />

    <!-- Title  -->
    <title>Vie</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('vie/assets/css/plugins.css') }}" />

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('vie/assets/css/style.css') }}" />

</head>

<body>


    <!-- ==================== Start Loading ==================== -->

    <div class="loading">
        <span>L</span>
        <span>o</span>
        <span>a</span>
        <span>d</span>
        <span>i</span>
        <span>n</span>
        <span>g</span>
    </div>

    <div id="preloader">
    </div>

    <!-- ==================== End Loading ==================== -->



    <!-- ==================== Start progress-scroll-button ==================== -->

    <div class="progress-wrap cursor-pointer">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>

    <!-- ==================== End progress-scroll-button ==================== -->



    <!-- ==================== Start cursor ==================== -->

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- ==================== End cursor ==================== -->



    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="#">
                <img src="img/logo-light.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Home</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="index.html">Main Home</a>
                            <a class="dropdown-item" href="index2.html">Creative Agency</a>
                            <a class="dropdown-item" href="index5.html">Digital Agency</a>
                            <a class="dropdown-item" href="index4.html">Business One Page</a>
                            <a class="dropdown-item" href="index3.html">Corporate Business</a>
                            <a class="dropdown-item" href="index6.html">Modern Agency</a>
                            <a class="dropdown-item" href="index7.html">Freelancer</a>
                            <a class="dropdown-item" href="index8.html">Architecture</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.html">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Works</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="showcase.html">Showcase Parallax</a>
                            <a class="dropdown-item" href="showcase4.html">Showcase Carousel</a>
                            <a class="dropdown-item" href="showcase3.html">Showcase Circle</a>
                            <a class="dropdown-item" href="works.html">Portfolio Masonry</a>
                            <a class="dropdown-item" href="works2.html">Portfolio Filtering</a>
                            <a class="dropdown-item" href="works3.html">Portfolio Gallery</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Blog</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="blog.html">Blog Standerd</a>
                            <a class="dropdown-item" href="blog-list.html">Blog List</a>
                            <a class="dropdown-item" href="blog-grid.html">Blog Grid</a>
                            <a class="dropdown-item" href="blog-details.html">Blog Details</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ==================== End Navbar ==================== -->



    <!-- ==================== Start Slider ==================== -->

    <header class="slider slider-prlx fixed-slider text-center">
        <div class="swiper-container parallax-slider">
            <div class="swiper-wrapper">

                @foreach ($postslide as $element)
                    @php
                        $postype = json_decode($element -> featured)
                    @endphp
                    @if ($postype -> format == 'image')
                       
                    
                    <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{ URL::to('')}}/media/post/{{ $postype -> image}}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8 col-md-10">
                                    <div class="caption center mt-30">
                                        <h1><span class="color-font">{{$element -> title}}</span> </h1>
                                        <a href="#0" class="butn bord curve mt-30">
                                            <span>Look More</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                
        
            </div>

            <!-- slider setting -->
            <div class="setone setwo">
                <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                    <i class="fas fa-chevron-right"></i>
                </div>
                <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                    <i class="fas fa-chevron-left"></i>
                </div>
            </div>
            <div class="swiper-pagination top botm "></div>

            <div class="social-icon">
                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                <a href="#0"><i class="fab fa-twitter"></i></a>
                <a href="#0"><i class="fab fa-behance"></i></a>
                <a href="#0"><i class="fab fa-pinterest-p"></i></a>
            </div>
        </div>
    </header>

    <!-- ==================== End Slider ==================== -->



    <div class="main-content">


        <!-- ==================== Start about ==================== -->

        <section class="about-us section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 valign md-mb50">
                        <div class="mb-50">
                            <h6 class="fw-100 text-u ls10 mb-10">About Us</h6>
                            <h3 class="fw-600 text-u ls1 mb-30 color-font">Our Comapny</h3>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                                laudantium, totam rem aperiam Sed ut perspiciatis unde omnis iste natus error sit
                                voluptatem
                                accusantium doloremque laudantium, totam rem aperiam.</p>
                            <a href="#0" class="butn bord curve mt-30">
                                <span>Read More</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-7 img">
                        <img src="img/feat.jpg" alt="">
                        <div class="stauts">
                            <div class="item">
                                <h4>3<span>K</span></h4>
                                <h6>Happy Clients</h6>
                            </div>
                            <div class="item">
                                <h4>14<span>K</span></h4>
                                <h6>Success Projects</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End about ==================== -->



        <!-- ==================== Start Services ==================== -->

        <section class="services bords section-padding pt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h6 class="wow fadeIn" data-wow-delay=".5s">Best Features</h6>
                            <h3 class="wow color-font">We are a new digital product development agency</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".5s">
                        <div class="item-box md-mb50">
                            <span class="icon pe-7s-paint-bucket"></span>
                            <h6>Graphic Design</h6>
                            <p>Tempore corrupti temporibus fuga earum asperiores fugit laudantium.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".7s">
                        <div class="item-box md-mb50">
                            <span class="icon pe-7s-phone"></span>
                            <h6>Web & Mobile Design</h6>
                            <p>Tempore corrupti temporibus fuga earum asperiores fugit.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".9s">
                        <div class="item-box">
                            <span class="icon pe-7s-display1"></span>
                            <h6>Social media Marketing</h6>
                            <p>Tempore corrupti temporibus fuga earum asperiores fugit.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Services ==================== -->



        <!-- ==================== Start works ==================== -->

        <section class="work-carousel metro position-re">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 no-padding">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="img/portfolio/metro/01.jpg">
                                        </div>
                                        <div class="cont">
                                            <h6 class="color-font"><a href="#0">art & illustration</a></h6>
                                            <h4><a href="project-details2.html">Innovation and Crafts.</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="img/portfolio/metro/02.jpg">
                                        </div>
                                        <div class="cont">
                                            <h6 class="color-font"><a href="#0">art & illustration</a></h6>
                                            <h4><a href="project-details2.html">Inspiring new space.</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="img/portfolio/metro/03.jpg">
                                        </div>
                                        <div class="cont">
                                            <h6 class="color-font"><a href="#0">art & illustration</a></h6>
                                            <h4><a href="project-details2.html">Natural plus modern.</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="img/portfolio/metro/04.jpg">
                                        </div>
                                        <div class="cont">
                                            <h6 class="color-font"><a href="#0">art & illustration</a></h6>
                                            <h4><a href="project-details2.html">Innovation and Crafts.</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                        <div class="item-img bg-img wow imago"
                                            data-background="img/portfolio/metro/05.jpg">
                                        </div>
                                        <div class="cont">
                                            <h6 class="color-font"><a href="#0">art & illustration</a></h6>
                                            <h4><a href="project-details2.html">Inspiring new space.</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- slider setting -->
                            <div class="swiper-button-next swiper-nav-ctrl simp-next cursor-pointer">
                                <span class="simple-btn right">Next</span>
                            </div>
                            <div class="swiper-button-prev swiper-nav-ctrl simp-prev cursor-pointer">
                                <span class="simple-btn">Prev</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End works ==================== -->



        <!-- ==================== Start numbers ==================== -->

        <section class="number-sec section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h6 class="wow fadeIn" data-wow-delay=".5s">FUN FACTS</h6>
                            <h3 class="wow color-font">Pleasure in the job puts perfection in the work.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="item no-bord sm-mb50">
                            <span class="icon pe-7s-smile"></span>
                            <h3 class=""><span class="count">2400</span></h3>
                            <p class="wow txt" data-splitting>People who are commited to their
                                management tasks.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item no-bord sm-mb50">
                            <span class="icon pe-7s-portfolio"></span>
                            <h3 class=""><span class="count">133</span></h3>
                            <p class="wow txt" data-splitting>Signed projects that have been
                                confirmed complete!</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="item no-bord">
                            <span class="icon pe-7s-medal"></span>
                            <h3 class=""><span class="count">46</span></h3>
                            <p class="wow txt" data-splitting>International awards and cups
                                for design projects.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End numbers ==================== -->



        <!-- ==================== Start video ==================== -->

        <section class="block-sec">
            <div class="background bg-img pt-100 pb-0 parallaxie" data-background="img/bg-vid.jpg"
                data-overlay-dark="5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="vid-area">
                                <span class="text">Watch Video</span>
                                <div class="vid-icon">
                                    <a class="vid" href="https://vimeo.com/127203262">
                                        <div class="vid-butn">
                                            <span class="icon">
                                                <i class="fas fa-play"></i>
                                            </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-1">
                            <div class="testim-box">
                                <div class="head-box">
                                    <h6 class="wow fadeIn" data-wow-delay=".5s">Our Clients</h6>
                                    <h4 class="wow fadeInLeft" data-wow-delay=".5s">What Client's Say?</h4>
                                </div>
                                <div class="slic-item wow fadeInUp" data-wow-delay=".5s">
                                    <div class="item">
                                        <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh volutpat velit
                                            class
                                            aptent taciti sociosqu ad litora.</p>
                                        <div class="info">
                                            <div class="img">
                                                <div class="img-box">
                                                    <img src="img/clients/1.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="cont">
                                                <div class="author">
                                                    <h6 class="author-name ">Alex Regelman</h6>
                                                    <span class="author-details">Co-founder, Colabrio</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh volutpat velit
                                            class
                                            aptent taciti sociosqu ad litora.</p>
                                        <div class="info">
                                            <div class="img">
                                                <div class="img-box">
                                                    <img src="img/clients/2.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="cont">
                                                <div class="author">
                                                    <h6 class="author-name ">Alex Regelman</h6>
                                                    <span class="author-details">Co-founder, Colabrio</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh volutpat velit
                                            class
                                            aptent taciti sociosqu ad litora.</p>
                                        <div class="info">
                                            <div class="img">
                                                <div class="img-box">
                                                    <img src="img/clients/3.jpg" alt="">
                                                </div>
                                            </div>
                                            <div class="cont">
                                                <div class="author">
                                                    <h6 class="author-name ">Alex Regelman</h6>
                                                    <span class="author-details">Co-founder, Colabrio</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End video ==================== -->


        <!-- ==================== Start Skills Circle ==================== -->

        <section class="skills-circle pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="item wow fadeInLeft" data-wow-delay=".6">
                                        <div class="skill" data-value="0.9">
                                            <span class="">90%</span>
                                        </div>
                                        <div class="cont">
                                            <span>Project</span>
                                            <h6>Consulting</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="item wow fadeInLeft" data-wow-delay=".3">
                                        <div class="skill" data-value="0.75">
                                            <span class="">75%</span>
                                        </div>
                                        <div class="cont">
                                            <span>App</span>
                                            <h6>Development</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Skills Circle ==================== -->



        <!-- ==================== Start clients Brands ==================== -->

        <section class="clients section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 valign md-mb50">
                        <div class="sec-head mb-0">
                            <h6 class="wow fadeIn" data-wow-delay=".5s">Best Features</h6>
                            <h3 class="wow mb-20 color-font">Our Clients</h3>
                            <p>Our area of practice is quite wide: design, graphics, branding, development.</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div>
                            <div class="row bord">
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="img/clients/brands/01.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".6s">
                                        <div class="img">
                                            <img src="img/clients/brands/02.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".8s">
                                        <div class="img">
                                            <img src="img/clients/brands/03.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="img/clients/brands/04.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-6 brands sm-mb30">
                                    <div class="item wow fadeIn" data-wow-delay=".4s">
                                        <div class="img">
                                            <img src="img/clients/brands/05.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands sm-mb30">
                                    <div class="item wow fadeIn" data-wow-delay=".7s">
                                        <div class="img">
                                            <img src="img/clients/brands/06.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".5s">
                                        <div class="img">
                                            <img src="img/clients/brands/07.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-6 brands">
                                    <div class="item wow fadeIn" data-wow-delay=".3s">
                                        <div class="img">
                                            <img src="img/clients/brands/08.png" alt="">
                                            <a href="#0" class="link" data-splitting>www.Vie.com</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End clients Brands ==================== -->



        <!-- ==================== Start Blog ==================== -->

        <section class="blog section-padding sub-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-md-10">
                        <div class="sec-head  text-center">
                            <h6 class="wow fadeIn" data-wow-delay=".5s">RECENT ARTICLES</h6>
                            <h3 class="wow color-font">From our blogs.</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                            <div class="img">
                                <img src="img/blog/1.jpg" alt="">
                            </div>
                            <div class="cont">
                                <div>
                                    <div class="info">
                                        <a href="#0" class="date">
                                            <span><i>06</i> August</span>
                                        </a>
                                        <span>/</span>
                                        <a href="#0" class="tag">
                                            <span>WordPress</span>
                                        </a>
                                    </div>
                                    <h5>
                                        <a href="#0">How to use solid color combine with simple furnitures.</a>
                                    </h5>
                                    <div class="btn-more">
                                        <a href="#0" class="simple-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".5s">
                            <div class="img">
                                <img src="img/blog/2.jpg" alt="">
                            </div>
                            <div class="cont">
                                <div>
                                    <div class="info">
                                        <a href="#0" class="date">
                                            <span><i>06</i> August</span>
                                        </a>
                                        <span>/</span>
                                        <a href="#0" class="tag">
                                            <span>WordPress</span>
                                        </a>
                                    </div>
                                    <h5>
                                        <a href="#0">How to use solid color combine with simple furnitures.</a>
                                    </h5>
                                    <div class="btn-more">
                                        <a href="#0" class="simple-btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Blog ==================== -->



        <!-- ==================== Start call-to-action ==================== -->

        <section class="call-action section-padding sub-bg bg-img" data-background="img/patrn.svg">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="content sm-mb30">
                            <h6 class="wow" data-splitting>Let’s Talk</h6>
                            <h2 class="wow" data-splitting>about your <br> <b class="back-color">next project</b>.</h2>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 valign">
                        <a href="contact.html" class="butn bord curve wow fadeInUp" data-wow-delay=".5s"><span>Get In
                                Touch</span></a>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==================== End call-to-action ==================== -->



        <!-- ==================== Start Footer ==================== -->

        <footer class="sub-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="item md-mb50">
                            <div class="title">
                                <h5>Contact Us</h5>
                            </div>
                            <ul>
                                <li>
                                    <span class="icon pe-7s-map-marker"></span>
                                    <div class="cont">
                                        <h6>Officeal Address</h6>
                                        <p>504 White St . Dawsonville,
                                            GA 30534 , New York</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon pe-7s-mail"></span>
                                    <div class="cont">
                                        <h6>Email Us</h6>
                                        <p>support@gmail.com</p>
                                    </div>
                                </li>
                                <li>
                                    <span class="icon pe-7s-call"></span>
                                    <div class="cont">
                                        <h6>Call Us</h6>
                                        <p>+87986451666</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item md-mb50">
                            <div class="title">
                                <h5>Recent News</h5>
                            </div>
                            <ul>
                                <li>
                                    <div class="img">
                                        <img src="img/blog/1.jpg" alt="">
                                    </div>
                                    <div class="sm-post">
                                        <p>The Start-Up Ultimate Guide to Make Your WordPress
                                            Journal.</p>
                                        <span class="date">14 sep 2021</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="img">
                                        <img src="img/blog/2.jpg" alt="">
                                    </div>
                                    <div class="sm-post">
                                        <p>The Start-Up Ultimate Guide to Make Your WordPress
                                            Journal.</p>
                                        <span class="date">14 sep 2021</span>
                                    </div>
                                </li>
                                <li>
                                    <div class="subscribe">
                                        <input type="text" placeholder="Type Your Email">
                                        <span class="subs pe-7s-paper-plane"></span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="item">
                            <div class="logo">
                                <img src="img/logo-light.png" alt="">
                            </div>
                            <div class="social">
                                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                <a href="#0"><i class="fab fa-twitter"></i></a>
                                <a href="#0"><i class="fab fa-instagram"></i></a>
                                <a href="#0"><i class="fab fa-youtube"></i></a>
                            </div>
                            <div class="copy-right">
                                <p>© 2021, Vie Template. Made with passion by <a href="#0">UI-ThemeZ</a>.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- ==================== End Footer ==================== -->


    </div>






    <!-- jQuery -->
    <script src="{{ asset('vie/assets/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('vie/assets/js/jquery-migrate-3.0.0.min.js') }}"></script>

    <!-- plugins -->
    <script src="{{ asset('vie/assets/js/plugins.js') }}"></script>

    <!-- custom scripts -->
    <script src="{{ asset('vie/assets/js/scripts.js') }}"></script>

</body>


<!-- Mirrored from www.innovationplans.com/idesign/vie1/vie-dark/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Oct 2021 07:57:35 GMT -->
</html>