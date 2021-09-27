<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bittanto - Creative Resume HTML5 Responsive Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <!-- Start Include All CSS -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/stroke-gap-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/icofont.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/Interest.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightslider.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery.mCustomScrollbar.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/preset.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/ignore_for_wp.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/light.css') }}" />
    <!-- End Include All CSS -->

    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ asset('frontend/assets/images/favicon.png') }}">
    <!-- Favicon Icon -->
</head>

<body class="dark">

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-box">
                <div class="letter">L</div>
                <div class="letter">O</div>
                <div class="letter">A</div>
                <div class="letter">D</div>
                <div class="letter">I</div>
                <div class="letter">N</div>
                <div class="letter">G</div>
            </div>
        </div>
    </div>
    <!-- Preloader End -->

    <div class="container">
        <div class="row">
            <div class="col-lg-4 profileColumn">
                <div class="profileSidebar">
                    <div class="psHeader">
                        <svg preserveAspectRatio="none" viewBox="0 0 100 100">
                            <polygon points="0 20, 100 20, 0 100" opacity=".65"></polygon>
                        </svg>
                        <svg class="svg2" preserveAspectRatio="none" viewBox="0 0 100 120">
                            <polygon points="0 20, 100 20, 15 120" opacity=".8"></polygon>
                        </svg>
                        <div class="psContent">
                            <h3>Linda M. Bellamy</h3>
                            <span>Sr. Developer</span>
                        </div>
                    </div>
                    <div class="psPhoto">
                        <img src="{{ asset('frontend/assets/images/home_01/1.jpg') }}" alt="" />
                        <div class="psSocial">
                            <a href="https://facebook.com" target="_blank" class="fac"><i
                                    class="icofont-facebook"></i></a>
                            <a href="https://twitter.com" target="_blank" class="twi"><i
                                    class="icofont-twitter"></i></a>
                            <a href="https://dribbble.com/" target="_blank" class="dri"><i
                                    class="icofont-dribbble"></i></a>
                            <a href="https://www.instagram.com/" target="_blank" class="ins"><i
                                    class="icofont-instagram"></i></a>
                        </div>
                    </div>
                    <div class="psSkills">
                        <div class="pssBox" data-count="85">
                            <div class="pssbCount">85.</div>
                            <h5>Backend Development</h5>
                            <div class="pssbBars">
                                <div class="pssbBar" style="width: 0%;"></div>
                            </div>
                        </div>
                        <div class="pssBox" data-count="92">
                            <div class="pssbCount">92.</div>
                            <h5>Frontend Development</h5>
                            <div class="pssbBars">
                                <div class="pssbBar gr2" style="width: 0%;"></div>
                            </div>
                        </div>
                        <div class="pssBox" data-count="71">
                            <div class="pssbCount">71.</div>
                            <h5>Illustration</h5>
                            <div class="pssbBars">
                                <div class="pssbBar gr3" style="width: 0%;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="psFooter">
                        <a href="javascript:void(0);" class="btt_btn only_icon btt_reverse"><span><i
                                    class="icon icon-DownloadCloud"></i></span></a>
                        <a href="javascript:void(0);" class="btt_btn contact_me"><span><i class="icon icon-Bag"></i>
                                Hire Me</span></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 contentColumn" id="tabContainer">
                <header class="header clearfix">
                    <a href="javascript:void(0)" class="menu_btn"><i class="icofont-navigation-menu"></i>Menu</a>
                    <nav class="mainMenu">
                        <ul class="clearfix" id="mainTab">
                            <li class="active"><a href="#home"><i class="icon icon-House"></i><span>Home</span></a></li>
                            <li><a href="#resume"><i class="icon icon-User"></i><span>Resume</span></a></li>
                            <li><a href="#portfolio"><i class="icon icon-Bulb"></i><span>Portfolio</span></a></li>
                            <li><a href="#blog"><i class="icon icon-ClipboardText"></i><span>Blog</span></a></li>
                            <li><a href="#contact"><i class="icon icon-Imbox"></i><span>Contact</span></a></li>
                        </ul>
                    </nav>
                    <a href="#" class="sidebarToggler"><span><span></span><span></span><span></span></span></a>
                </header>
                <div class="sidebar">
                    <a href="javascript:void(0);" class="widget_closer"><i class="icofont-close-line"></i></a>
                    <div class="widget widget-search">
                        <h3 class="widget_title">Search</h3>
                        <form method="post" action="#" class="search_form">
                            <input type="text" name="s" placeholder="Enter Keword">
                            <button type="submit"><i class="icon icon-Search"></i></button>
                        </form>
                    </div>
                    <div class="widget widget-search">
                        <h3 class="widget_title">Categories</h3>
                        <ul>
                            <li><a href="blog.html">Web</a>(18)</li>
                            <li><a href="blog.html">Startup</a>(11)</li>
                            <li><a href="blog.html">Branding</a>(17)</li>
                            <li><a href="blog.html">UI UX</a>(23)</li>
                            <li><a href="blog.html">Agency</a>(19)</li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h3 class="widget_title">
                            Recent Posts
                        </h3>
                        <div class="singleRecent">
                            <img src="{{ asset('frontend/assets/images/blog/7.jpg') }}" alt="">
                            <span>01 Apr, 2021</span>
                            <a href="single_blog.html">
                                Create your next web site with Unity.
                            </a>
                        </div>
                        <div class="singleRecent">
                            <img src="{{ asset('frontend/assets/images/blog/8.jpg') }}" alt="">
                            <span>31 Mar, 2021</span>
                            <a href="single_blog.html">
                                Truly unique hundreds of elements.
                            </a>
                        </div>
                        <div class="singleRecent">
                            <img src="{{ asset('frontend/assets/images/blog/9.jpg') }}" alt="">
                            <span>26 Mar, 2021</span>
                            <a href="single_blog.html">
                                Easily create unlimited amount of custom.
                            </a>
                        </div>
                    </div>
                    <div class="widget">
                        <h3 class="widget_title">Tags</h3>
                        <div class="tabclouds">
                            <a href="blog.html">Web Design</a>
                            <a href="blog.html">Development</a>
                            <a href="blog.html">CSS</a>
                            <a href="blog.html">Studio</a>
                            <a href="blog.html">Award</a>
                            <a href="blog.html">Mobile</a>
                            <a href="blog.html">IOS</a>
                            <a href="blog.html">IOS</a>
                            <a href="blog.html">UI / UX</a>
                            <a href="blog.html">Portfolio</a>
                        </div>
                    </div>
                </div>
                <div class="sidebarOverlay"></div>
                <div class="bodyContent" id="home">
                    <div class="pageCointainer">
                        <section class="comonSection aboutSection">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="sectionTitle">About Info</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="icon_box_01">
                                                    <i class="icon icon-User"></i>
                                                    <h3>My Name</h3>
                                                    <p>K. Melissa Caroll</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="icon_box_01">
                                                    <i class="icon icon-Calculator"></i>
                                                    <h3>My Age</h3>
                                                    <p>32 Years 241 Days</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="icon_box_01">
                                                    <i class="icon icon-Mail"></i>
                                                    <h3>Email Address</h3>
                                                    <p>k.melissa@caroll.me</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="icon_box_01">
                                                    <i class="icon icon-Phone"></i>
                                                    <h3>Phone Number</h3>
                                                    <p>1.800.987.6987</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="icon_box_01">
                                                    <i class="icon icon-Pointer"></i>
                                                    <h3>Address</h3>
                                                    <p><a href="https://www.google.com/maps/place/189+Lodge+Ave,+Dagenham+RM8+2HQ,+UK/@51.5438977,0.1111455,17z/data=!3m1!4b1!4m5!3m4!1s0x47d8a5c65f86bfd1:0x9f6ccecbee08b740!8m2!3d51.5438944!4d0.1133342"
                                                            target="_blank">Click Here to View Map.</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt30">
                                    <div class="col-lg-12">
                                        <h2 class="sectionTitle mb22">Short Bio</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="abContent">
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.
                                                Quis ipsum suspendisse ultrices gravida risus commodo. Quis ipsum
                                                suspendisse ultrices gravida.
                                            </p>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                                tempor incididunt
                                                <a href="#" class="fw_500">ut labore et dolore magna</a> aliqua.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="abContent">
                                            <p class="mb27">
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                            <img class="signImg" src="{{ asset('frontend/assets/images/home_01/3.png') }}" alt="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt52">
                                    <div class="col-lg-12">
                                        <h2 class="sectionTitle">What I Do?</h2>
                                    </div>
                                </div>
                                <div class="row itemMb30">
                                    <div class="col-lg-4">
                                        <div class="icon_box_02">
                                            <div class="i_div">
                                                <i class="icon icon-Settings"></i>
                                            </div>
                                            <h3><a href="javascript:void(0);">Web Development</a></h3>
                                            <h5>from scratch</h5>
                                            <p>
                                                Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="icon_box_02">
                                            <div class="i_div">
                                                <i class="icon icon-Pen"></i>
                                            </div>
                                            <h3><a href="javascript:void(0);">UX recherche</a></h3>
                                            <h5>data collection</h5>
                                            <p>
                                                Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="icon_box_02">
                                            <div class="i_div">
                                                <i class="icon icon-Layers"></i>
                                            </div>
                                            <h3><a href="javascript:void(0);">UI design</a></h3>
                                            <h5>creativ design</h5>
                                            <p>
                                                Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="icon_box_02">
                                            <div class="i_div">
                                                <i class="icon icon-Phone"></i>
                                            </div>
                                            <h3><a href="javascript:void(0);">Application</a></h3>
                                            <h5>stand alone</h5>
                                            <p>
                                                Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="icon_box_02">
                                            <div class="i_div">
                                                <i class="icon icon-Share"></i>
                                            </div>
                                            <h3><a href="javascript:void(0);">Social Media</a></h3>
                                            <h5>digital product</h5>
                                            <p>
                                                Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="icon_box_02">
                                            <div class="i_div">
                                                <i class="icon icon-ChartUp"></i>
                                            </div>
                                            <h3><a href="javascript:void(0);">Search Engine</a></h3>
                                            <h5>page rank</h5>
                                            <p>
                                                Sunt explicabo. Nemo enim ipsam voluptatem quia sit voluptas aspernatur.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt30">
                                    <div class="col-lg-12">
                                        <h2 class="sectionTitle">What They Says?</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="testimonialSlider owl-carousel">
                                            <div class="singleTestimonial">
                                                <div class="testiImg">
                                                    <img src="{{ asset('frontend/assets/images/author/1.jpg') }}" alt="">
                                                    <span></span>
                                                </div>
                                                <div class="testicon">
                                                    <p>
                                                        They'll have to make the best of things its an uphill climb.
                                                        Said Californ'y is the place you ought
                                                        to be So they loaded up the truck and moved to Beverly. Hills
                                                        that is. Swimmin' pools movie stars.
                                                        Maybe you and me were never meant to be.
                                                    </p>
                                                    <div class="tesAuthor">
                                                        <h5>Edward Johnson,</h5>
                                                        <h6>themewar.com</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="singleTestimonial">
                                                <div class="testiImg">
                                                    <img src="{{ asset('frontend/assets/images/author/2.jpg') }}" alt="">
                                                    <span></span>
                                                </div>
                                                <div class="testicon">
                                                    <p>
                                                        They'll have to make the best of things its an uphill climb.
                                                        Said Californ'y is the place you ought
                                                        to be So they loaded up the truck and moved to Beverly. Hills
                                                        that is. Swimmin' pools movie stars.
                                                        Maybe you and me were never meant to be.
                                                    </p>
                                                    <div class="tesAuthor">
                                                        <h5>Mosharof Khondoker,</h5>
                                                        <h6>themewar.com</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="singleTestimonial">
                                                <div class="testiImg">
                                                    <img src="{{ asset('frontend/assets/images/author/3.jpg') }}" alt="">
                                                    <span></span>
                                                </div>
                                                <div class="testicon">
                                                    <p>
                                                        They'll have to make the best of things its an uphill climb.
                                                        Said Californ'y is the place you ought
                                                        to be So they loaded up the truck and moved to Beverly. Hills
                                                        that is. Swimmin' pools movie stars.
                                                        Maybe you and me were never meant to be.
                                                    </p>
                                                    <div class="tesAuthor">
                                                        <h5>Sara Ferdoush,</h5>
                                                        <h6>themewar.com</h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt60">
                                    <div class="col-lg-12">
                                        <h2 class="sectionTitle">Fair Price</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="pricingTable text-center">
                                            <i class="icon icon-Car"></i>
                                            <h5>Starter Package</h5>
                                            <p>
                                                Suitable for small business or Organizations.
                                            </p>
                                            <h2>$27.00</h2>
                                            <h6>per project</h6>
                                            <a href="contact.html" class="btt_link"><i
                                                    class="icon icon-OpenedLock"></i><span>Let's Start</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="pricingTable text-center">
                                            <i class="icon icon-Truck"></i>
                                            <h5>Business Package</h5>
                                            <p>
                                                Suitable for medium business or Organizations.
                                            </p>
                                            <h2>$47.00</h2>
                                            <h6>per project</h6>
                                            <a href="contact.html" class="btt_link"><i
                                                    class="icon icon-OpenedLock"></i><span>Let's Start</span></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="pricingTable text-center">
                                            <i class="icon icon-BigTruck"></i>
                                            <h5>Pro Package</h5>
                                            <p>
                                                Suitable for any business or Organizations.
                                            </p>
                                            <h2>$97.00</h2>
                                            <h6>per project</h6>
                                            <a href="contact.html" class="btt_link"><i
                                                    class="icon icon-OpenedLock"></i><span>Let's Start</span></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt60">
                                    <div class="col-lg-5">
                                        <h2 class="sectionTitle">Love To</h2>
                                        <div class="singleInt">
                                            <i class="interest-badminton"></i>
                                            <h3>Badminton</h3>
                                        </div>
                                        <div class="singleInt">
                                            <i class="interest-knight"></i>
                                            <h3>Chase</h3>
                                        </div>
                                        <div class="singleInt">
                                            <i class="interest-basketball"></i>
                                            <h3>Basket Ball</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-7">
                                        <h2 class="sectionTitle">Languages</h2>
                                        <div class="languageDiv">
                                            <div class="ldInner profLevel7">
                                                <h5>English</h5>
                                                <span></span><span></span><span></span><span></span><span></span>
                                                <span></span><span></span><span></span><span></span><span></span>
                                                <i>7/10</i>
                                            </div>
                                            <div class="ldInner profLevel6">
                                                <h5>German</h5>
                                                <span></span><span></span><span></span><span></span><span></span>
                                                <span></span><span></span><span></span><span></span><span></span>
                                                <i>6/10</i>
                                            </div>
                                            <div class="ldInner profLevel4">
                                                <h5>Spanish</h5>
                                                <span></span><span></span><span></span><span></span><span></span>
                                                <span></span><span></span><span></span><span></span><span></span>
                                                <i>4/10</i>
                                            </div>
                                            <div class="ldInner profLevel9">
                                                <h5>Bangla</h5>
                                                <span></span><span></span><span></span><span></span><span></span>
                                                <span></span><span></span><span></span><span></span><span></span>
                                                <i>9/10</i>
                                            </div>
                                            <div class="ldInner profLevel7">
                                                <h5>Hindi</h5>
                                                <span></span><span></span><span></span><span></span><span></span>
                                                <span></span><span></span><span></span><span></span><span></span>
                                                <i>7/10</i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt30">
                                    <div class="col-lg-12">
                                        <div class="clientSlider owl-carousel">
                                            <div class="sliderItem">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset('frontend/assets/images/client/8.png') }}" alt="Client" />
                                                </a>
                                            </div>
                                            <div class="sliderItem">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset('frontend/assets/images/client/9.png') }}" alt="Client" />
                                                </a>
                                            </div>
                                            <div class="sliderItem">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset('frontend/assets/images/client/10.png') }}" alt="Client" />
                                                </a>
                                            </div>
                                            <div class="sliderItem">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset('frontend/assets/images/client/11.png') }}" alt="Client" />
                                                </a>
                                            </div>
                                            <div class="sliderItem">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset('frontend/assets/images/client/12.png') }}" alt="Client" />
                                                </a>
                                            </div>
                                            <div class="sliderItem">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset('frontend/assets/images/client/13.png') }}" alt="Client" />
                                                </a>
                                            </div>
                                            <div class="sliderItem">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset('frontend/assets/images/client/14.png') }}" alt="Client" />
                                                </a>
                                            </div>
                                            <div class="sliderItem">
                                                <a href="javascript:void(0);">
                                                    <img src="{{ asset('frontend/assets/images/client/15.png') }}" alt="Client" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt60">
                                    <div class="col-lg-12">
                                        <h2 class="sectionTitle">Interesting Facts</h2>
                                    </div>
                                </div>
                                <div class="row mb30">
                                    <div class="col-lg-4">
                                        <div class="icon_box_03 text-center hasCounter" data-count="10">
                                            <div class="icon_div">
                                                <i><span class="counter">10</span>+</i>
                                            </div>
                                            <h5>Years Experience</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="icon_box_03 text-center hasCounter" data-count="198">
                                            <div class="icon_div">
                                                <i><span class="counter">198</span>+</i>
                                            </div>
                                            <h5>Projects Done</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="icon_box_03 text-center hasCounter" data-count="2">
                                            <div class="icon_div">
                                                <i><span class="counter">2</span>K+</i>
                                            </div>
                                            <h5>Happy Customers</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <footer class="footer">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <div class="copyRight">&copy; 2021 All Rights Reserved By <a
                                                href="http://themewar.com" target="_blank">ThemeWar</a></div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
                <div class="bodyContent" id="resume">
                    <div class="pageCointainer">
                        <section class="comonSection resumeSection">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h2 class="sectionTitle">Education</h2>
                                        <div class="kr-accordion" id="edication_accordion">
                                            <div class="card">
                                                <div class="card-header" id="ea_01">
                                                    <h2 class="mb-0">
                                                        <a class="" href="#" data-toggle="collapse"
                                                            data-target="#ea_col_01" aria-expanded="true"
                                                            aria-controls="ea_col_01">
                                                            <i class="icon icon-Medal"></i>
                                                            <span>Secondary School Certificate</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="ea_col_01" class="collapse show" aria-labelledby="ea_01"
                                                    data-parent="#edication_accordion">
                                                    <div class="card-body">
                                                        <div class="ac_meta"><span>Passing Year: 2008</span><span>Grade:
                                                                3.92</span></div>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="ea_02">
                                                    <h2 class="mb-0">
                                                        <a class="collapsed" href="#" data-toggle="collapse"
                                                            data-target="#ea_col_02" aria-expanded="false"
                                                            aria-controls="ea_col_02">
                                                            <i class="icon icon-Medal"></i>
                                                            <span>Higher Secondary School Certificate</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="ea_col_02" class="collapse" aria-labelledby="ea_02"
                                                    data-parent="#edication_accordion">
                                                    <div class="card-body">
                                                        <div class="ac_meta"><span>Passing Year: 2010</span><span>Grade:
                                                                3.85</span></div>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="ea_03">
                                                    <h2 class="mb-0">
                                                        <a class="collapsed" href="#" data-toggle="collapse"
                                                            data-target="#ea_col_03" aria-expanded="false"
                                                            aria-controls="ea_col_03">
                                                            <i class="icon icon-Medal"></i>
                                                            <span>Computer Science &amp; Engeneering</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="ea_col_03" class="collapse" aria-labelledby="ea_01"
                                                    data-parent="#edication_accordion">
                                                    <div class="card-body">
                                                        <div class="ac_meta"><span>Passing Year: 2014</span><span>Grade:
                                                                3.79</span></div>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="ea_04">
                                                    <h2 class="mb-0">
                                                        <a class="collapsed" href="#" data-toggle="collapse"
                                                            data-target="#ea_col_04" aria-expanded="false"
                                                            aria-controls="ea_col_04">
                                                            <i class="icon icon-Medal"></i>
                                                            <span>Programming Course </span>
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="ea_col_04" class="collapse" aria-labelledby="ea_01"
                                                    data-parent="#edication_accordion">
                                                    <div class="card-body">
                                                        <div class="ac_meta"><span>Passing Year: 2015</span><span>Grade:
                                                                3.79</span></div>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h2 class="sectionTitle">Experience</h2>
                                        <div class="kr-accordion" id="exps_accordion">
                                            <div class="card">
                                                <div class="card-header" id="ex_01">
                                                    <h2 class="mb-0">
                                                        <a class="" href="#" data-toggle="collapse"
                                                            data-target="#ex_col_01" aria-expanded="true"
                                                            aria-controls="ex_col_01">
                                                            <i class="icon icon-Cup"></i>
                                                            <span>ABC Software Ltd.</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="ex_col_01" class="collapse show" aria-labelledby="ex_01"
                                                    data-parent="#exps_accordion">
                                                    <div class="card-body">
                                                        <div class="ac_meta"><span>Jan 2015 - Mar 2016</span><span>Jr.
                                                                Developer</span></div>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="ex_02">
                                                    <h2 class="mb-0">
                                                        <a class="collapsed" href="#" data-toggle="collapse"
                                                            data-target="#ex_col_02" aria-expanded="false"
                                                            aria-controls="ex_col_02">
                                                            <i class="icon icon-Cup"></i>
                                                            <span>XYZ Company Ltd.</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="ex_col_02" class="collapse" aria-labelledby="ex_02"
                                                    data-parent="#exps_accordion">
                                                    <div class="card-body">
                                                        <div class="ac_meta"><span>Mar 2016 - Apr 2017</span><span>Sr.
                                                                Developer</span></div>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="ex_03">
                                                    <h2 class="mb-0">
                                                        <a class="collapsed" href="#" data-toggle="collapse"
                                                            data-target="#ex_col_03" aria-expanded="false"
                                                            aria-controls="ex_col_03">
                                                            <i class="icon icon-Cup"></i>
                                                            <span>LCC Softwar Ltd.</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="ex_col_03" class="collapse" aria-labelledby="ex_01"
                                                    data-parent="#exps_accordion">
                                                    <div class="card-body">
                                                        <div class="ac_meta"><span>Jul 2017 - Nov 2018</span><span>Lead
                                                                Developer</span></div>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="ex_04">
                                                    <h2 class="mb-0">
                                                        <a class="collapsed" href="#" data-toggle="collapse"
                                                            data-target="#ex_col_04" aria-expanded="false"
                                                            aria-controls="ex_col_04">
                                                            <i class="icon icon-Cup"></i>
                                                            <span>Envato Ltd.</span>
                                                        </a>
                                                    </h2>
                                                </div>
                                                <div id="ex_col_04" class="collapse" aria-labelledby="ex_04"
                                                    data-parent="#exps_accordion">
                                                    <div class="card-body">
                                                        <div class="ac_meta"><span>Nov 2018 - Continue</span><span>Lead
                                                                Developer</span></div>
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life
                                                        accusamus terry richardson ad squid. 3 wolf moon officia aute,
                                                        non cupidatat skateboard dolor brunch.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <footer class="footer">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <div class="copyRight">&copy; 2021 All Rights Reserved By <a
                                                href="http://themewar.com" target="_blank">ThemeWar</a></div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
                <div class="bodyContent" id="portfolio">
                    <div class="pageCointainer">
                        <section class="comonSection portfolioSection">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="sectionTitle">Latest Projects</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="filterUL">
                                            <li class="active filter" data-filter="all">All</li>
                                            <li class="filter" data-filter="dev">Development</li>
                                            <li class="filter" data-filter="graphic">Graphic</li>
                                            <li class="filter" data-filter="app">App</li>
                                            <li class="filter" data-filter="illustrtopm">Illustration</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row" id="Grid">
                                    <div class="col-lg-4 folio_effect mix graphic">
                                        <div class="folio_item">
                                            <a href="single_folio.html" class="folio_item_thumbs">
                                                <div class="folio_stack">
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_img_holder">
                                                        <img class="folio_img" src="{{ asset('frontend/assets/images/folio/1.jpg') }}"
                                                            alt="Image">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="folio_content">
                                                <h3 class="folio_title"><a href="single_folio.html">Artwork Design</a>
                                                </h3>
                                                <p class="folio_cat"><a href="portfolio.html">Graphic</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 folio_effect mix dev">
                                        <div class="folio_item">
                                            <a href="single_folio.html" class="folio_item_thumbs">
                                                <div class="folio_stack">
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_img_holder">
                                                        <img class="folio_img" src="{{ asset('frontend/assets/images/folio/2.jpg') }}"
                                                            alt="Image">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="folio_content">
                                                <h3 class="folio_title"><a href="single_folio.html">Web App</a></h3>
                                                <p class="folio_cat"><a href="portfolio.html">Development</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 folio_effect mix illustrtopm">
                                        <div class="folio_item">
                                            <a href="single_folio.html" class="folio_item_thumbs">
                                                <div class="folio_stack">
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_img_holder">
                                                        <img class="folio_img" src="{{ asset('frontend/assets/images/folio/3.jpg') }}"
                                                            alt="Image">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="folio_content">
                                                <h3 class="folio_title"><a href="single_folio.html">Pencil Drawing</a>
                                                </h3>
                                                <p class="folio_cat"><a href="portfolio.html">Illustration</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 folio_effect mix app">
                                        <div class="folio_item">
                                            <a href="single_folio.html" class="folio_item_thumbs">
                                                <div class="folio_stack">
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_img_holder">
                                                        <img class="folio_img" src="{{ asset('frontend/assets/images/folio/4.jpg') }}"
                                                            alt="Image">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="folio_content">
                                                <h3 class="folio_title"><a href="single_folio.html">Graphic App</a></h3>
                                                <p class="folio_cat"><a href="portfolio.html">App</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 folio_effect mix graphic">
                                        <div class="folio_item">
                                            <a href="single_folio.html" class="folio_item_thumbs">
                                                <div class="folio_stack">
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_img_holder">
                                                        <img class="folio_img" src="{{ asset('frontend/assets/images/folio/5.jpg') }}"
                                                            alt="Image">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="folio_content">
                                                <h3 class="folio_title"><a href="single_folio.html">Awesome
                                                        Illustration</a></h3>
                                                <p class="folio_cat"><a href="portfolio.html">UI/UX</a></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 folio_effect mix dev">
                                        <div class="folio_item">
                                            <a href="single_folio.html" class="folio_item_thumbs">
                                                <div class="folio_stack">
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_decoration"></div>
                                                    <div class="folio_img_holder">
                                                        <img class="folio_img" src="{{ asset('frontend/assets/images/folio/6.jpg') }}"
                                                            alt="Image">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="folio_content">
                                                <h3 class="folio_title"><a href="single_folio.html">Frontend
                                                        Development</a></h3>
                                                <p class="folio_cat"><a href="portfolio.html">Development</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row loadMoreRow mb22">
                                    <div class="col-lg-12 loadMoreCol text-center mt23">
                                        <a href="#" data-count="1" class="btt_btn bttb_dark loadMoreItem"><span><i
                                                    class="icon icon-Restart"></i> Load More</span></a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <footer class="footer">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <div class="copyRight">&copy; 2021 All Rights Reserved By <a
                                                href="http://themewar.com" target="_blank">ThemeWar</a></div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
                <div class="bodyContent" id="blog">
                    <div class="pageCointainer">
                        <section class="comonSection blogSecion">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="sectionTitle">Latest Posts</h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="blogItem text-left">
                                            <div class="biThumb">
                                                <img src="{{ asset('frontend/assets/images/blog/1.jpg') }}" alt="" />
                                                <div class="biMeta">
                                                    <a href="blog.html">Bellamy</a><a href="blog.html">02 Apr, 2021</a>
                                                </div>
                                            </div>
                                            <div class="biDetails">
                                                <h3><a href="single_blog.html">10 Tell-Tale Signs You Need to Get New
                                                        Technology</a></h3>
                                                <p>
                                                    Morbi ullamcorper vel nunc quis venenatis. Ut auctor dapibus
                                                    dignissim. Sed tincidunt non odio id dignissim donec.
                                                </p>
                                                <a href="single_blog.html" class="btt_link"><span>Read More</span></a>
                                                <span class="blogCount">01</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blogItem text-left">
                                            <div class="biThumb">
                                                <img src="{{ asset('frontend/assets/images/blog/2.jpg') }}" alt="" />
                                                <div class="biMeta">
                                                    <a href="blog.html">Bellamy</a><a href="blog.html">02 Apr, 2021</a>
                                                </div>
                                            </div>
                                            <div class="biDetails">
                                                <h3><a href="single_blog.html">A Technology Success Story You'll Never
                                                        Believe</a></h3>
                                                <p>
                                                    Morbi ullamcorper vel nunc quis venenatis. Ut auctor dapibus
                                                    dignissim. Sed tincidunt non odio id dignissim donec.
                                                </p>
                                                <a href="single_blog.html" class="btt_link"><span>Read More</span></a>
                                                <span class="blogCount">02</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blogItem text-left">
                                            <div class="biThumb">
                                                <img src="{{ asset('frontend/assets/images/blog/3.jpg') }}" alt="" />
                                                <div class="biMeta">
                                                    <a href="blog.html">Bellamy</a><a href="blog.html">02 Apr, 2021</a>
                                                </div>
                                            </div>
                                            <div class="biDetails">
                                                <h3><a href="single_blog.html">The Worst Videos of All Time About
                                                        Technology</a></h3>
                                                <p>
                                                    Morbi ullamcorper vel nunc quis venenatis. Ut auctor dapibus
                                                    dignissim. Sed tincidunt non odio id dignissim donec.
                                                </p>
                                                <a href="single_blog.html" class="btt_link"><span>Read More</span></a>
                                                <span class="blogCount">03</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="blogItem text-left">
                                            <div class="biThumb">
                                                <img src="{{ asset('frontend/assets/images/blog/4.jpg') }}" alt="" />
                                                <div class="biMeta">
                                                    <a href="blog.html">Bellamy</a><a href="blog.html">02 Apr, 2021</a>
                                                </div>
                                            </div>
                                            <div class="biDetails">
                                                <h3><a href="single_blog.html">20 Resources That'll Make You Better at
                                                        Technology</a></h3>
                                                <p>
                                                    Morbi ullamcorper vel nunc quis venenatis. Ut auctor dapibus
                                                    dignissim. Sed tincidunt non odio id dignissim donec.
                                                </p>
                                                <a href="single_blog.html" class="btt_link"><span>Read More</span></a>
                                                <span class="blogCount">04</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt30 mb30">
                                    <div class="col-lg-12">
                                        <div class="btt_pagination">
                                            <a href="blog.html"><i class="icon icon-Arrow rotateHorizonaly"></i></a>
                                            <span class="current">01</span>
                                            <a href="blog.html">02</a>
                                            <a href="blog.html">03</a>
                                            <span class="blanks">...</span>
                                            <a href="blog.html">10</a>
                                            <a href="blog.html"><i class="icon icon-Arrow"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <footer class="footer">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <div class="copyRight">&copy; 2021 All Rights Reserved By <a
                                                href="http://themewar.com" target="_blank">ThemeWar</a></div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
                <div class="bodyContent" id="contact">
                    <div class="pageCointainer">
                        <section class="comonSection mapSection mb30">
                            <div class="map" id="map"></div>
                        </section>
                        <section class="comonSection contactSection">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h2 class="sectionTitle">Contact Me</h2>
                                    </div>
                                </div>
                                <div class="row mb30">
                                    <div class="col-lg-8">
                                        <div class="contact_form">
                                            <form method="post" action="#" id="contactForm">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" class="required" name="full_name"
                                                            placeholder="Full Name *" />
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="required" name="email"
                                                            placeholder="Email *" />
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" name="phone" placeholder="Phone" />
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" class="required" name="sjubject"
                                                            placeholder="Subject *" />
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea name="message" class="required"
                                                            placeholder="Message *"></textarea>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <button type="submit" class="btt_btn"><span><i
                                                                    class="icon icon-Mail"></i>Send
                                                                Message</span></button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="icon_box_01">
                                            <i class="icon icon-Mail"></i>
                                            <h3>Email Address</h3>
                                            <p>k.melissa@caroll.me</p>
                                        </div>
                                        <div class="icon_box_01">
                                            <i class="icon icon-Phone"></i>
                                            <h3>Phone Number</h3>
                                            <p>1.800.987.6987</p>
                                        </div>
                                        <div class="icon_box_01 addrBox">
                                            <i class="icon icon-Pointer"></i>
                                            <h3>Address</h3>
                                            <p>
                                                189 Lodge Avenue,
                                                Dagenham, RM8 2HQ,
                                                United Kingdom
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <footer class="footer">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 text-center">
                                        <div class="copyRight">&copy; 2021 All Rights Reserved By <a
                                                href="http://themewar.com" target="_blank">ThemeWar</a></div>
                                    </div>
                                </div>
                            </div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bact To Top -->
    <a href="javascript:void(0);" id="backtotop"><i class="icofont-bubble-up"></i></a>
    <!-- Bact To Top -->

    <!-- Start Include All JS -->
    <script src="{{ asset('frontend/assets/js/jquery.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.appear.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/mixer.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/lightslider.min.js') }}"></script>
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyBJtPMZ_LWZKuHTLq5o08KSncQufIhPU3o"></script>
    <script src="{{ asset('frontend/assets/js/gmaps.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/anime.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/folio.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/jquery.easytabs.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/theme.js') }}"></script>
    <!-- End Include All JS -->
</body>

</html>
