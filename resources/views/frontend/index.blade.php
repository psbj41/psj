<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pratik Jadhav</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    @include('frontend.css')
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

                <!--Menu-->
                @include('frontend.menu')
                <!--Menu-->

                <!--sidebar-->
                @include('frontend.sidebar')
                <!--end sidebar-->


                <div class="sidebarOverlay"></div>

                @include('frontend.home')
                @include('frontend.resume')
                @include('frontend.portfolio')
                @include('frontend.blog')
                @include('frontend.contact')


            </div>
        </div>
    </div>

    <!-- Bact To Top -->
    <a href="javascript:void(0);" id="backtotop"><i class="icofont-bubble-up"></i></a>
    <!-- Bact To Top -->

    @include('frontend.scripts')

</body>

</html>
