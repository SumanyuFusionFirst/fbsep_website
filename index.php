<!-- Header Section starts from here -->
<?php include("header.php"); ?>
<!-- End of Header Section -->

<div class="loading-overlay loading-bg loaderShow">
    <div class="flexbox">
        <div style="align-items: end;flex-basis: 100%;height: 50vh;">
            <div style="position: absolute;">
                <img src="<?= $baseurl ?>/img/FBSPL/header/FBSPLNewLoader.svg" style="height: 80px;margin: 68px;border:none">
            </div>
            <div class="multi-spinner-container">
                <div class="multi-spinner">
                    <div class="multi-spinner">
                        <div class="multi-spinner">
                            <div class="multi-spinner">
                                <div class="multi-spinner">
                                    <div class="multi-spinner">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flexbox">
        <div style="flex-basis: 100%;height: 10vh;align-items:flex-start;border:none">
            <div>
                <h5 class="text-center" id="messagesuccesss">“Success is Sure, Believe in Phoenix”</h5>
            </div>
        </div>
    </div>
</div>



<section class="section border-0 video m-0 heroDesktop" style="z-index: 0;">
    <?php
    if (!$isMob) {
    ?>
        <div class="vide-video-wrapper" style="position: absolute; z-index: -1; inset: 0px; overflow: hidden; background-size: cover; background-color: transparent; background-repeat: no-repeat; background-position: 50% 50%; background-image: none;">
            <video poster="<?= $baseurl ?>/img/Black.webp" autoplay="" loop="" muted="" style="margin: auto; position: absolute; z-index: -1; top: 50%; left: 50%; transform: translate(-50%, -50%); visibility: visible; opacity: 1; width: 1595px; height: auto;">
                <!-- <source src="video/compressBlack.mp4" type="video/mp4"> -->
                <source src="<?= $baseurl ?>/video/Untitled.webm" type="video/webm">
                <!-- <source src="video/compressBlack.ogv" type="video/ogg"> -->
            </video>
        </div>
    <?php
    }
    ?>
    <div class="container" style="margin-left:20px">
        <div class="row align-items-center">
            <div class="col-12" style="margin-bottom: 56px">
                <div class="d-flex flex-column align-items-start justify-content-center">
                    <h1 class="word-rotator slide font-weight-bold text-12 mb-2">
                        <span class="text-color-light">keeping</span>
                        <span class="word-rotator-words valign-bottom" style="border-bottom: 8px solid #f7901e; vertical-align: bottom; height: 150px; width: 225.89px; overflow: hidden;">
                            <b class="text-20 text-color-light is-visible" style="margin-top:-10px;">u</b>
                            <b style="margin-top:88px;" class="text-color-light is-hidden">clients</b>
                            <b style="margin-top:88px;" class="text-color-light is-hidden">business</b>
                            <b style="margin-top:88px;" class="text-color-light is-hidden">team</b>
                            <b style="margin-top:88px;" class="text-color-light is-hidden">partners</b>
                            <!-- <b style="margin-top:88px;" class="text-color-light is-hidden"> </b> -->
                        </span>
                        <span class="text-color-light">first</span>
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <a href="#main" class="slider-scroll-button slider-scroll-button-light font-weight-bold position-absolute bottom-10 left-50pct transform3dx-n50" data-hash="" data-hash-offset="0" data-hash-offset-lg="80" style="margin-bottom: 56px">Sroll To Bottom</a>
</section>



<!-- hero mobile page -->
<div role="main" class="main heroMobile">
    <div class="container position-relative z-index-3 m-0 p-0 mt-5" style="overflow-x: hidden;">
        <div class="row align-items-center">
            <?php
            if ($isMob) {
            ?>
                <div class="col-sm-6" style="height:55vh">
                    <video id="presentation2" poster="<?= $baseurl ?>/img/ssss.png" class="float-start p-0" autoplay="" muted="" loop="" preload="metadata" playsinline="playsinline" style="width: 243%;margin-left: -127%;margin-top: 0%;">
                        <source src="<?= $baseurl ?>/video/Untitled.webm" type="video/webm">
                    </video>
                </div>
            <?php
            }
            ?>
            <!-- <div class="col-sm-6" style="margin-top:-10%;height:40vh">
                    <section class="section border-0 video m-0" data-video-path="video/gray.mp4"
                        data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}"
                        style="height: 40vh;">
                        <div class="container position-relative z-index-3">
                            <div class="row">
                                <div class="col-sm-12">
                                    <span class="text-color-light text-12 font-weight-bold">keeping</span>
                                </div>
                                <div class="col-sm-12" style="text-align:center;">
                                    <h2 class="word-rotator slide font-weight-bold text-12 mb-2"
                                        style="margin-left:20%">
                                        <span class="word-rotator-words valign-bottom ml-5"
                                            style="border-bottom: 8px solid #f7901e; vertical-align: bottom;">
                                            <b class="text-color-light is-visible">u</b>
                                            <b class="text-color-light">client</b>
                                            <b class="text-color-light">business</b>
                                            <b class="text-color-light">team</b>
                                            <b class="text-color-light">partners</b>
                                            <b class="text-color-light">community</b>
                                        </span>
                                    </h2>
                                </div>
                                <div class="col-sm-12 mt-2" style="text-align:end;">
                                    <span class="text-color-light text-12 font-weight-bold">first</span>
                                </div>
                            </div>
                        </div>
                        <a href="#main"
                            class="slider-scroll-button slider-scroll-button-dark position-absolute bottom-10 left-50pct transform3dx-n50"
                            data-hash data-hash-offset="0" data-hash-offset-lg="80">Sroll To Bottom</a>
                </div> -->

            <div class="col-sm-6" style="margin-top:-10%;height:40vh">
                <section class="section border-0 video m-0 text-color-dark" style="height: 40vh;background-color: #fff;">
                    <div class="container position-relative z-index-3">
                        <div class="row position-relative z-index-3 h-100">
                            <div class="col-sm-12">
                                <span class="text-12 font-weight-bold ">keeping</span>
                            </div>
                            <div class="col-sm-12" style="text-align:center;">
                                <h2 class="word-rotator slide font-weight-bold text-12 mb-2" style="margin-left:20%">
                                    <span class="word-rotator-words valign-bottom ml-5" style="border-bottom: 8px solid #f7901e; vertical-align: bottom;">
                                        <b class="is-visible">u</b>
                                        <b>client</b>
                                        <b>business</b>
                                        <b>team</b>
                                        <b>partners</b>
                                        <b>community</b>
                                    </span>
                                </h2>
                            </div>
                            <div class="col-sm-12 mt-2" style="text-align:end;">
                                <span class="text-12 font-weight-bold">first</span>
                            </div>
                        </div>
                    </div>
                    <a href="#main" class="slider-scroll-button slider-scroll-button-dark position-absolute bottom-10 left-50pct transform3dx-n50" data-hash data-hash-offset="0" data-hash-offset-lg="80">Sroll To Bottom</a>
            </div>
            </section>
        </div>
    </div>
</div>
</div>
</section>

<!-- Who we are -->
<div class="container mt-5">
    <div id="aboutus" class="row align-items-xl-center">
        <div class="col-md-10 col-lg-6">
            <div class="col-md-12">
                <div class="position-relative">
                    <!-- style="margin-top: -110px;" -->
                    <div class="ratio ratio-4x3" style="margin-top: -50px;">
                        <video id="presentation2" title="Get to know FBSPL: A Business Process Outsourcing, Management & Consulting Company" aria-label="Explore top-tier BPM services & outsourcing solutions. Our expert consultation strives to provide business growth. Watch the video to learn more." class="float-start" width="100%" height="100%" autoplay="" muted="" loop="" preload="metadata" poster="<?= $baseurl ?>/img/aboutUs2-1.webp">
                            <source src="<?= $baseurl ?>/video/Office-video.webm" type="video/webm">
                            <!-- <source src="video/aboutUs.mp4" type="video/mp4"> -->
                        </video>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 ps-lg-4 ps-xl-5">
            <h3 class="text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">An Awarded Business
                Process Management and IT Services Company
            </h3>
            <p class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="text-align: justify;">Our business process management solutions
                are designed to help you
                increase efficiency and scale your business with ease. We also offer IT services to help you create
                custom applications and software.
            </p>
            <p class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500">
                We are a company that believes in the potential of people and we can help you unleash yours.
            </p>
            <div class="row content-grid-row">
                <div class="content-grid-item col-6 bg-color-light">
                    <div class="counters">
                        <div class="counter custom-sm-counter-style">
                            <img class="counter-icon" src="<?= $baseurl ?>/img/FBSPL/icons/icon-1.png" style="margin-right: 137px;
                              margin-bottom: -78px;" alt="emoji" loading="lazy">
                            <strong class="text-color-primary custom-primary-font" data-to="17" data-append="+">17+</strong>
                            <label>Years in Business</label>
                        </div>
                    </div>
                </div>
                <div class="content-grid-item col-6 divider-left-border">
                    <div class="counters">
                        <div class="counter custom-sm-counter-style">
                            <img class="counter-icon" src="<?= $baseurl ?>/img/FBSPL/icons/icon-3.png" style="margin-right: 169px;
                              margin-bottom: -78px;" alt="smiley emoji" loading="lazy">
                            <strong class="text-color-primary custom-primary-font" data-to="550" data-append="+">550+</strong>
                            <label>Happy Clients</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Client Logo -->
<?php include("clientlogo.php"); ?>

<!-- our it services -->
<section class="section section-height-3 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-0 m-0">
    <div class="shape-divider" style="height: 123px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
            <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
            <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
        </svg>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-12 text-center">
                <!-- <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
                     data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">WHAT WE DO
                     </h2> -->
                <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-3 pb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Scope of
                    Services
                </h3>
                <p class="text-3-5 p-0 m-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">Are you ready to scale your team based on the workflow and
                    eliminate hiring and recurring staffing cost?
                </p>
                <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">FBSPL can help you with that. We are a business process
                    management company that offers skilled teams and the right advice for your operational needs
                    when you need them the most.
                </p>
            </div>
        </div>
        <?php include("bpmservices.php"); ?>
</section>
<!-- geography -->
<div class="container">
    <div id="aboutus" class="row align-items-xl-center pt-4 mt-5">
        <div class="col-md-10 col-lg-6 mb-5 mb-lg-0">
            <div class="row row-gutter-sm">
                <div class="col-12">
                    <img src="<?= $baseurl ?>/img/FBSPL/websiteMap2.svg" class="img-fluid " alt="FBSPL Locations">
                </div>
                <!-- <div class="col-6">
         <img src="<?= $baseurl ?>/img/demos/business-consulting-3/generic/generic-2.jpg" class="img-fluid box-shadow-5 mb-4" alt="">
         <img src="<?= $baseurl ?>/img/demos/business-consulting-3/generic/generic-3.jpg" class="img-fluid box-shadow-5" alt="">
         </div> -->
            </div>
        </div>
        <div class="col-lg-6 ps-lg-4 ps-xl-5">
            <!-- <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation animated fadeInUpShorter appear-animation-visible"
         data-appear-animation="fadeInUpShorter" style="animation-delay: 100ms;">GEOGRAPHIES</h2> -->
            <h3 class="text-9 text-lg-5 text-xl-9 line-height-3 text-transform-none font-weight-semibold mb-4 mb-lg-3 mb-xl-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" style="animation-delay: 250ms;" style="text-align: justify;">Global Coverage</h3>
            <p style="text-align: justify;" class="text-3-5 pb-1 mb-4 mb-lg-2 mb-xl-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="500" style="animation-delay: 500ms;">Our Business Process Management and IT solutions help businesses to
                grow. We have offices in the United States, United Kingdom, Canada and India while we serve clients
                globally.
            </p>
            <!-- https://img.freepik.com/free-vector/illustration-usa-flag_53876-18165.jpg -->
            <div class="row align-items-center pb-2 mb-4 mb-lg-1 mb-xl-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" style="animation-delay: 750ms;">
                <div class="col-lg-6 mt-3">
                    <img src="https://img.freepik.com/free-vector/illustration-usa-flag_53876-18165.jpg" alt="USA" width="50px" />
                    <span class="flag text-4">United States</span>
                </div>
                <div class="col-lg-6 mt-3">
                    <img src="https://img.freepik.com/free-vector/illustration-uk-flag_53876-18166.jpg" alt="UK" width="50px" />
                    <span class="flag text-4">United Kingdom</span>
                </div>
                <div class="col-lg-6 mt-3">
                    <img src="https://img.freepik.com/free-vector/illustration-canada-flag_53876-27114.jpg" alt="Canada" width="50px" />
                    <span class="flag text-4">Canada</span>
                </div>
                <div class="col-lg-6 mt-3">
                    <img src="https://img.freepik.com/free-vector/illustration-india-flag_53876-27130.jpg" alt="India" width="50px" />
                    <span class="flag text-4">India</span>
                </div>
            </div>
            <!-- <div class="row align-items-center pb-2 mb-4 mb-lg-1 mb-xl-4 appear-animation animated fadeInUpShorter appear-animation-visible"
                data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750"
                style="animation-delay: 750ms;">
                <div class="col-lg-6 mt-3">
                    <img src="https://img.freepik.com/free-vector/illustration-canada-flag_53876-27114.jpg" width="100px" />
                    <span class="flag text-4">Canada</span>
                </div>
                <div class="col-lg-6 mt-3">
                <img src="https://img.freepik.com/free-vector/illustration-india-flag_53876-27130.jpg" width="100px"/>
                <span class="flag text-4">India</span>
                </div>
            </div> -->
            <!-- <div class="appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1000" style="animation-delay: 1000ms;">
         <a href="demo-business-consulting-3-contact.html" class="btn btn-primary btn-modern font-weight-semibold btn-px-4 btn-py-2 text-3-5" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span>Get a Quote</span></a>
         </div> -->
        </div>
    </div>
</div>
<!-- who we serve -->
<section class="section section-height-3 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-0 m-0">
    <div class="shape-divider" style="height: 123px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
            <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 " />
            <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 " />
        </svg>
    </div>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-12 text-center">
                <!-- <h2 class="custom-highlight-text-1 d-inline-block line-height-5 text-4 positive-ls-3 font-weight-medium text-color-primary mb-2 appear-animation"
         data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">WHO WE SERVE
         </h2> -->
                <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-3 pb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Customized Solutions
                    for <strong class="text-primary text-5"><u>u</u></strong>
                </h3>
                <p class="text-3-5 p-0 m-0 mb-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">There are a lot of options when it comes to business process
                    management solutions, and we want to make sure you choose the right one. That's why we're
                    committed to understanding your unique
                    business needs, and then helping you implement customized workforce solutions that will improve
                    your bottom line while maintaining the kind of flexibility and adaptability necessary for
                    success in today's changing economy.
                </p>
                <!-- <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
         data-appear-animation-delay="300">That's why we're committed to understanding your unique
      business needs, and then helping you implement customized workforce solutions that will improve
      your bottom line while maintaining the kind of flexibility and adaptability necessary for
      success in today's changing economy. </p> -->
            </div>
        </div>
        <div class="row row-gutter-sm justify-content-center mb-5 mt-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
            <div class="col-sm-9 col-md-6 col-lg-3 mb-4 mb-lg-0">
                <div class="card text-center cardHover2">
                    <div>
                        <div>
                            <!-- <i aria-hidden="true"
                                class="fa fa-building font-weight-extra-bold text-color-dark line-height-1 text-10 cardIcon"></i> -->
                            <img class="cardIcon" src="<?= $baseurl ?>/img/FBSPL/Home Page Icon/Enterprises.svg" alt="FBSPL">
                            <h4 class="font-weight-bold text-4 mariginForCard cardColor">Enterprises</h4>
                            <p class="cardColor p-2" style="padding-bottom: 34px !important;">We provide skilled
                                teams for enterprises of all sizes. You can now put the best workforce in place with
                                the right helping hand by your side. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-3 mb-4 mb-lg-0 margintopForCard">
                <div class="card text-center cardHover2">
                    <div>
                        <div>
                            <!-- <i class="fa-solid fa-business-time"></i> -->
                            <!-- <i aria-hidden="true"
                                class="fa-solid fa-business-time font-weight-extra-bold text-color-dark line-height-1 text-10 cardIcon"></i> -->
                            <img class="cardIcon" src="<?= $baseurl ?>/img/FBSPL/Home Page Icon/Scaling Businesses.svg" alt="FBSPL">
                            <h4 class="font-weight-bold text-4 mariginForCard cardColor">Scaling Businesses</h4>
                            <p class="cardColor p-2">FBSPL has the experienced team scaling businesses need. If
                                you’re looking at scaling your team sizes to achieve smooth operations, you’re
                                looking in the right place. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-3 mb-4 mb-lg-0 margintopForCard">
                <div class="card text-center cardHover2">
                    <div>
                        <div>
                            <!-- <i aria-hidden="true"
                                class="fa-solid fa-rocket font-weight-extra-bold text-color-dark line-height-1 text-10 cardIcon"></i> -->
                            <img class="cardIcon" src="<?= $baseurl ?>/img/FBSPL/Home Page Icon/Startup.svg" alt="FBSPL">
                            <h4 class="font-weight-bold text-4 mariginForCard cardColor">Start-ups</h4>
                            <p class="cardColor p-2">Our services can help start-ups on their way to growth! If
                                you’re a start-up with a drive and direction, and simply want experience by your
                                side, count on FBSPL experts. </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-9 col-md-6 col-lg-3 mb-4 mb-lg-0 margintopForCard">
                <div class="card text-center cardHover2">
                    <div>
                        <div>
                            <!-- <i aria-hidden="true"
                                class="fa-solid fa-atom font-weight-extra-bold text-color-dark line-height-1 text-10 cardIcon"></i> -->
                            <img class="cardIcon" src="<?= $baseurl ?>/img/FBSPL/Home Page Icon/AI based Platforms.svg" alt="FBSPL">
                            <h4 class="font-weight-bold text-4 mariginForCard cardColor">AI-based Platforms</h4>
                            <p class="cardColor p-2">Our resources work in collaboration with AI platforms to churn
                                out the best customer experiences and outputs. We’re what your AI-based platform
                                needs! </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row">
         <div class="col text-center">
             <a href="demo-business-consulting-3-services.html"
                 class="btn btn-primary btn-modern font-weight-semibold btn-px-4 btn-py-2 text-3-5"
                 data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">
                 <span>All Services</span>
             </a>
         </div>
         </div> -->
    </div>
</section>
<!-- why us -->
<section class="section section-height-3 section-with-shape-divider position-relative bg-dark border-0 m-0">
    <div class="shape-divider shape-divider-reverse-x z-index-3" style="height: 102px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 102" preserveAspectRatio="xMinYMin">
            <polygon fill="#F3F3F3" points="0,65 220,35 562,63 931,10 1410,68 1920,16 1920,103 0,103 " />
            <polygon fill="#EDEDED" points="0,82 219,51 562,78 931,26 1409,83 1920,32 1920,103 0,103 " />
        </svg>
    </div>
    <div class="position-absolute top-0 left-0 h-100 d-none d-lg-block overlay overlay-show overlay-color-primary" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="<?= $baseurl ?>/img/demos/business-consulting-3/parallax/parallax-1.jpg" style="width: 40%;"></div>
    <div class="container position-relative z-index-3 pt-5 mt-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="custom-text-background custom-big-font-size-1 text-15 font-weight-bold float-end clearfix line-height-1 lazyload pe-xl-5 me-3 mb-0 d-none d-lg-block" data-bg-src="<?= $baseurl ?>/img/white.jpeg" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.6, 'transition': true, 'horizontal': true, 'transitionDuration': 1000, 'isInsideSVG': true}">
                    BENEFITS</h2>
            </div>
            <div class="col-lg-6">
                <h3 class="text-9 benefit line-height-3 text-transform-none text-light text-center font-weight-semibold mb-3 pb-1 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" style="animation-delay: 250ms;">BENEFITS
                </h3>
                <ul class="list ps-0 mb-0">
                    <li class="d-flex align-items-start pb-1 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1">
                        <img src="<?= $baseurl ?>/img/FBSPL/Home Page Icon/Expertise.svg" alt="Expertise" style="height: 60px">
                        <span class="text-3-5  mt-2 ps-3 text-color-light"><b class="benefitsFont"><span class=" text-color-primary text-4 highlight-animated highlight-animated-start" data-appear-animation="highlight-animated-start" data-appear-animation-delay="300" data-plugin-options="{'flagClassOnly': true}" style="animation-delay: 300ms; transition-delay: 300ms;">Expertise: </span>You can
                                trust us to deliver
                                the results you need, without you having to micromanage them</b></span>
                    </li>
                    <li class="d-flex align-items-start pb-1 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1">
                        <img src="<?= $baseurl ?>/img/FBSPL/Home Page Icon/Flexibility.svg" alt="Flexibility" style="height: 60px">
                        <span class="text-3-5 mt-2 ps-3 text-color-light"><b class="benefitsFont"><span class=" text-color-primary text-4 highlight-animated highlight-animated-start" data-appear-animation="highlight-animated-start" data-appear-animation-delay="700" data-plugin-options="{'flagClassOnly': true}" style="animation-delay: 700ms; transition-delay: 700ms;">Flexibility: </span> Time
                                zone of your
                                preference, 24x7 Availability, Monthly payments</b></span>
                    </li>
                    <li class="d-flex align-items-start pb-1 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1">
                        <img src="<?= $baseurl ?>/img/FBSPL/Home Page Icon/Affordability.svg" alt="Affordability" style="height: 60px">
                        <span class="text-3-5 mt-2 ps-3 text-color-light"><b class="benefitsFont"><span class=" text-color-primary text-4 highlight-animated highlight-animated-start" data-appear-animation-delay="900" data-plugin-options="{'flagClassOnly': true}" style="animation-delay: 900ms; transition-delay: 900ms;">Affordability: </span>One
                                flat fee, no
                                traditional salary structure, no sick days, Services starting at US $
                                7.9/hr</b></span>
                    </li>
                    <li class="d-flex align-items-start pb-1 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1">
                        <img src="<?= $baseurl ?>/img/FBSPL/Home Page Icon/Scalability.svg" alt="Scalability" style="height: 60px">
                        <span class="text-3-5 mt-2 ps-3 text-color-light"><b class="benefitsFont"><span class=" text-color-primary text-4 highlight-animated highlight-animated-start" data-appear-animation="highlight-animated-start" data-appear-animation-delay="1200" data-plugin-options="{'flagClassOnly': true}" style="animation-delay: 1200ms; transition-delay: 1200ms;">Scalability: </span>No
                                long-term
                                contracts, Cross trained backup staff</b></span>
                    </li>


                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Testimonials video -->
<div class="container py-2 my-4 desktop">
    <div class="row justify-content-center pt-3">
        <div class="col-lg-10 text-center">
            <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-3 pb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Meet Our Clients
            </h3>
            <!-- <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="300">We deliver industry-leading capabilities to clients across all
                major verticals including Financial Services, Manufacturing, Technology and Services, Telecom
                and
                Media, Retail and CPG, Life Sciences and Healthcare and Public Services.</p> -->
        </div>
    </div>
    <div class="row row-gutter-sm justify-content-center mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
        <div class="owl-carousel show-nav-title custom-dots-style-2 custom-dots-position-3 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
            <div class="row" style="margin:auto">
                <div class="col-12 col-sm-4 col-lg-6 text-center">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-4 m-0 p-0">
                                <img src="<?= $baseurl ?>/img/FBSPL/Clients/arr.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-lg-8 cardHoverBg">
                                <div class="card-body mb-0 pb-0">
                                    <div class="card-title testimonial custom-testimonial-style-1 testimonial-with-quotes mb-1">
                                        <div class="testimonial-author">
                                            <p><strong>Arielle Barrow</strong><span class="text-color-primary"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-title testimonial custom-testimonial-style-1  mb-3">
                                        <div class="testimonial-author text-3">
                                            Insurance<span class="text-color-primary"></span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none lightbox" data-plugin-options="{'type':'iframe'}" data-iframe-url="https://www.youtube.com/embed/WCmDv5Hc_sc">
                                        <div class="feature-box align-items-center">
                                            <div class="feature-box-icon pulseAnim pulseAnimAnimated">
                                                <i class="fas fa-play text-1"></i>
                                            </div>
                                            <div class="feature-box-info" style="margin-right: 170px;">
                                                <h4 class="line-height-3 text-5 mb-0">Watch
                                                </h4>
                                                <!-- <p class="text-2 mb-0 line-height-5">32 Seconds</p> -->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-6 text-center">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-4 m-0 p-0">
                                <img src="<?= $baseurl ?>/img/FBSPL/Clients/Joey (1).jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-lg-8 cardHoverBg">
                                <div class="card-body  mb-0 pb-0">
                                    <div class="card-title testimonial custom-testimonial-style-1 testimonial-with-quotes mb-3">
                                        <div class="testimonial-author">
                                            <p><strong>Joey Cumley</strong><span class="text-color-primary"></p>
                                        </div>
                                    </div>
                                    <div class="card-title testimonial custom-testimonial-style-1  mb-3">
                                        <div class="testimonial-author text-3">
                                            E-Commerce<span class="text-color-primary"></span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none lightbox" data-plugin-options="{'type':'iframe'}" data-iframe-url="https://www.youtube.com/embed/4_mO7V5tIoA">
                                        <div class="feature-box align-items-center">
                                            <div class="feature-box-icon pulseAnim pulseAnimAnimated">
                                                <i class="fas fa-play text-1"></i>
                                            </div>
                                            <div class="feature-box-info" style="margin-right: 170px;">
                                                <h4 class="line-height-3 text-5 mb-0">Watch
                                                </h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin:auto">
                <div class="col-12 col-sm-4 col-lg-6 text-center">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-4 m-0 p-0">
                                <img src="<?= $baseurl ?>/img/FBSPL/Clients/greggmora.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-lg-8 cardHoverBg">
                                <div class="card-body mb-0 pb-0">
                                    <div class="card-title testimonial custom-testimonial-style-1 testimonial-with-quotes mb-3">
                                        <div class="testimonial-author">
                                            <p><strong>Gregg Mora</strong><span class="text-color-primary"></span></p>
                                        </div>
                                    </div>
                                    <div class="card-title testimonial custom-testimonial-style-1  mb-3">
                                        <div class="testimonial-author text-3">
                                            Finance (Merchant Cash Advance)<span class="text-color-primary"></span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none lightbox" data-plugin-options="{'type':'iframe'}" data-iframe-url="https://www.youtube.com/embed/_7r8UAGscX0">
                                        <div class="feature-box align-items-center">
                                            <div class="feature-box-icon pulseAnim pulseAnimAnimated">
                                                <i class="fas fa-play text-1"></i>
                                            </div>
                                            <div class="feature-box-info" style="margin-right: 170px;">
                                                <h4 class="line-height-3 text-5 mb-0">Watch
                                                </h4>
                                                <!-- <p class="text-2 mb-0 line-height-5">32 Seconds</p> -->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-lg-6 text-center">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-4 m-0 p-0">
                                <img src="<?= $baseurl ?>/img/FBSPL/Clients/stacy.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-lg-8 cardHoverBg">
                                <div class="card-body mb-0 pb-0">
                                    <div class="card-title testimonial custom-testimonial-style-1 testimonial-with-quotes mb-3">
                                        <div class="testimonial-author">
                                            <p><strong>Stacey DiSpigno</strong><span class="text-color-primary"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-title testimonial custom-testimonial-style-1  mb-3">
                                        <div class="testimonial-author text-3">
                                            Lead Generation<span class="text-color-primary"></span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none lightbox" data-plugin-options="{'type':'iframe'}" data-iframe-url="https://www.youtube.com/embed/aQXYtLrh2fE">
                                        <div class="feature-box align-items-center">
                                            <div class="feature-box-icon pulseAnim pulseAnimAnimated">
                                                <i class="fas fa-play text-1"></i>
                                            </div>
                                            <div class="feature-box-info" style="margin-right: 170px;">
                                                <h4 class="line-height-3 text-5 mb-0">Watch
                                                </h4>
                                                <!-- <p class="text-2 mb-0 line-height-5">32 Seconds</p> -->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container py-2 my-4 mobile">
    <div class="row justify-content-center pt-3">
        <div class="col-lg-10 text-center">
            <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-3 pb-1 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">Meet Our Clients
            </h3>
            <!-- <p class="text-3-5 pb-3 mb-4 appear-animation" data-appear-animation="fadeInUpShorter"
                data-appear-animation-delay="300">We deliver industry-leading capabilities to clients across all
                major verticals including Financial Services, Manufacturing, Technology and Services, Telecom
                and
                Media, Retail and CPG, Life Sciences and Healthcare and Public Services.</p> -->
        </div>
    </div>
    <div class="row row-gutter-sm justify-content-center mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250">
        <div class="owl-carousel show-nav-title custom-dots-style-2 custom-dots-position-3 mb-0" data-plugin-options="{'items': 1, 'autoHeight': true, 'loop': false, 'nav': false, 'dots': true}">
            <div class="row" style="margin:auto">
                <div class="col-12 col-sm-4 col-lg-6 text-center">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-4 m-0 p-0">
                                <img src="<?= $baseurl ?>/img/FBSPL/Clients/arr.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-lg-8 cardHoverBg">
                                <div class="card-body">
                                    <div class="card-title testimonial custom-testimonial-style-1 testimonial-with-quotes mb-1">
                                        <div class="testimonial-author">
                                            <p><strong>Arielle Barrow</strong><span class="text-color-primary"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-title testimonial custom-testimonial-style-1  mb-3">
                                        <div class="testimonial-author text-3">
                                            Insurance<span class="text-color-primary"></span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none lightbox" data-plugin-options="{'type':'iframe'}" data-iframe-url="https://www.youtube.com/embed/WCmDv5Hc_sc">
                                        <div class="feature-box align-items-center">
                                            <div class="feature-box-icon pulseAnim pulseAnimAnimated">
                                                <i class="fas fa-play text-1"></i>
                                            </div>
                                            <div class="feature-box-info" style="margin-right: 170px;">
                                                <h4 class="line-height-3 text-5 mb-0">Watch
                                                </h4>
                                                <!-- <p class="text-2 mb-0 line-height-5">32 Seconds</p> -->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row" style="margin:auto">
                <div class="col-12 col-sm-4 col-lg-6 text-center">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-4 m-0 p-0">
                                <img src="<?= $baseurl ?>/img/FBSPL/Clients/greggmora.jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-lg-8 cardHoverBg">
                                <div class="card-body">
                                    <div class="card-title testimonial custom-testimonial-style-1 testimonial-with-quotes mb-3">
                                        <div class="testimonial-author">
                                            <p><strong>Gregg Mora</strong><span class="text-color-primary"></span></p>
                                        </div>
                                    </div>
                                    <div class="card-title testimonial custom-testimonial-style-1  mb-3">
                                        <div class="testimonial-author text-3">
                                            Finance (Merchant Cash Advance)<span class="text-color-primary"></span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none lightbox" data-plugin-options="{'type':'iframe'}" data-iframe-url="https://www.youtube.com/embed/_7r8UAGscX0">
                                        <div class="feature-box align-items-center">
                                            <div class="feature-box-icon pulseAnim pulseAnimAnimated">
                                                <i class="fas fa-play text-1"></i>
                                            </div>
                                            <div class="feature-box-info" style="margin-right: 170px;">
                                                <h4 class="line-height-3 text-5 mb-0">Watch
                                                </h4>
                                                <!-- <p class="text-2 mb-0 line-height-5">32 Seconds</p> -->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row" style="margin:auto">

                <div class="col-12 col-sm-4 col-lg-6 text-center">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-4 m-0 p-0">
                                <img src="<?= $baseurl ?>/img/FBSPL/Clients/Joey (1).jpg" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-lg-8 cardHoverBg">
                                <div class="card-body">
                                    <div class="card-title testimonial custom-testimonial-style-1 testimonial-with-quotes mb-3">
                                        <div class="testimonial-author">
                                            <p><strong>Joey Cumley</strong><span class="text-color-primary"></p>
                                        </div>
                                    </div>
                                    <div class="card-title testimonial custom-testimonial-style-1  mb-3">
                                        <div class="testimonial-author text-3">
                                            E-Commerce<span class="text-color-primary"></span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none lightbox" data-plugin-options="{'type':'iframe'}" data-iframe-url="https://www.youtube.com/embed/4_mO7V5tIoA">
                                        <div class="feature-box align-items-center">
                                            <div class="feature-box-icon pulseAnim pulseAnimAnimated">
                                                <i class="fas fa-play text-1"></i>
                                            </div>
                                            <div class="feature-box-info" style="margin-right: 170px;">
                                                <h4 class="line-height-3 text-5 mb-0">Watch
                                                </h4>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin:auto">

                <div class="col-12 col-sm-4 col-lg-6 text-center">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-4 m-0 p-0">
                                <img src="<?= $baseurl ?>/img/FBSPL/Clients/stacy.png" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col-lg-8 cardHoverBg">
                                <div class="card-body">
                                    <div class="card-title testimonial custom-testimonial-style-1 testimonial-with-quotes mb-3">
                                        <div class="testimonial-author">
                                            <p><strong>Stacey DiSpigno</strong><span class="text-color-primary"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card-title testimonial custom-testimonial-style-1  mb-3">
                                        <div class="testimonial-author text-3">
                                            Lead Generation<span class="text-color-primary"></span>
                                        </div>
                                    </div>
                                    <a href="#" class="text-decoration-none lightbox" data-plugin-options="{'type':'iframe'}" data-iframe-url="https://www.youtube.com/embed/aQXYtLrh2fE">
                                        <div class="feature-box align-items-center">
                                            <div class="feature-box-icon pulseAnim pulseAnimAnimated">
                                                <i class="fas fa-play text-1"></i>
                                            </div>
                                            <div class="feature-box-info" style="margin-right: 170px;">
                                                <h4 class="line-height-3 text-5 mb-0">Watch
                                                </h4>
                                                <!-- <p class="text-2 mb-0 line-height-5">32 Seconds</p> -->
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- new Testimonials -->
<?php include("testimonialnew.php"); ?>
<!-- Process -->
<section>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-xl-10 text-center">
                <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">How to Get Started
                </h3>
            </div>
        </div>
        <!-- Deivide in Four -->
        <div class="row row-gutter-sm justify-content-center appear-animation devideInFour m-0 p-0" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">
            <div class="col-md-9 col-lg-3 text-center appear-animation margin115" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="100">
                <!-- <span class="ProcessNumber">01</span> -->
                <div class="animated-icon animated fadeIn svg-fill-color-light mb-4-5 svgColorAndRadius">
                    <img src="<?= $baseurl ?>/img/icons/Make an Inquiry.svg" alt="Make an Inquiry" style="height: 110px"></img>
                </div>
                <h3 class="text-color-dark text-transform-none text-5-6 font-weight-semibold mb-3">Make an
                    Inquiry
                </h3>
                <!-- <p class="text-3-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
         viverra erat orci, ac auctorl
         tincidunt</p> -->
            </div>
            <div class="col-md-9 col-lg-3 text-center appear-animation margin126" data-appear-animation="fadeIn" data-appear-animation-delay="100">
                <!-- <span class="ProcessNumber">02</span> -->
                <div class="animated-icon animated fadeIn svg-fill-color-light mb-4-5 svgColorAndRadius">
                    <img src="<?= $baseurl ?>/img/icons/Talk to FBSPL Experts.svg" alt="Talk to FBSPL Experts" style="height: 110px"></img>
                </div>
                <h3 class="text-color-dark text-transform-none text-5-6 font-weight-semibold mb-3">Talk to FBSPL
                    Experts </h3>
                <!-- <p class="text-3-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
         viverra erat orci, ac auctorl
         tincidunt </p> -->
            </div>
            <div class="col-md-9 col-lg-3 text-center appear-animation margin55" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="100">
                <!-- <span class="ProcessNumber">03</span> -->
                <div class="animated-icon animated fadeIn svg-fill-color-light mb-4-5 svgColorAndRadius">
                    <img src="<?= $baseurl ?>/img/icons/Meet your Team.svg" alt="Meet your Team" style="height: 110px"></img>
                </div>
                <h3 class="text-color-dark text-transform-none text-5-6 font-weight-semibold mb-3">Meet your
                    Team</h3>
                <!-- <p class="text-3-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
         viverra erat orci, ac auctorl
         tincidunt </p> -->
            </div>
            <div class="col-md-9 col-lg-3 text-center appear-animation margin152" data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="100">
                <!-- <span class="ProcessNumber">04</span> -->
                <div class="animated-icon animated fadeIn svg-fill-color-light mb-4-5 svgColorAndRadius">
                    <img src="<?= $baseurl ?>/img/icons/Begin your Seamless Journey.svg" alt="Begin your Seamless Journey" style="height: 110px"></img>
                </div>
                <h3 class="text-color-dark text-transform-none text-5-6 font-weight-semibold mb-5">Begin your
                    Seamless Journey</h3>
                <!-- <p class="text-3-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc
         viverra erat orci, ac auctorl
         tincidunt </p> -->
            </div>
        </div>
    </div>
</section>
<?php include("casestudies.php"); ?>
<!-- awards -->
<section>
    <div class="container py-5">
        <div class="row text-center pt-4">
            <div class="col">
                <h2 class="word-rotator slide font-weight-bold text-8 mb-2">
                    <span>We're not the only ones </span>
                    <span class="word-rotator-words">
                        <b class="is-visible text-primary ">excited</b>
                        <b class="text-primary">happy</b>
                    </span>
                    <span> about FBSPL...</span>
                </h2>
                <!-- <h4 class="text-primary lead tall text-4">45,000 CUSTOMERS IN 100 COUNTRIES USE FBSPL.
         MEET OUR CUSTOMERS.</h4> -->
            </div>
        </div>
        <div class="row text-center mt-5">
            <div class="owl-carousel owl-theme" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'nav': true, 'dots': false}">
                <div>
                    <img class="img-fluid" src="<?= $baseurl ?>/img/Logo/GreatPlaceToWork.jpg" alt="Great Place To Work">
                </div>
                <div>
                    <img class="img-fluid" src="https://www.fusionfirst.com/wp-content/uploads/2020/01/Softwareworld.png" alt="Top Rated App Development Software - SoftwareWorld">
                </div>

                <div>
                    <img class="img-fluid" src="https://www.fusionfirst.com/wp-content/uploads/2020/01/Sem-2019.png" alt="SEM Firms">
                </div>
                <div>
                    <img class="img-fluid" src="https://www.fusionfirst.com/wp-content/uploads/2020/01/Clutch.png" alt="Clutch review for FBSPL">
                </div>
                <div>
                    <img class="img-fluid" src="<?= $baseurl ?>/img/Logo/GreatPlaceToWork.jpg" alt="Great Place To Work">
                </div>
                <div>
                    <img class="img-fluid" src="https://www.fusionfirst.com/wp-content/uploads/2020/01/Softwareworld.png" alt="Top Rated App Development Software">
                </div>
                <div>
                    <img class="img-fluid" src="https://www.fusionfirst.com/wp-content/uploads/2020/01/shopify-2019.png" alt="Top Developers">
                </div>
                <div>
                    <img class="img-fluid" src="https://www.fusionfirst.com/wp-content/uploads/2020/01/Sem-2019.png" alt="SEM Firms">
                </div>
                <div>
                    <img class="img-fluid" src="<?= $baseurl ?>/img/Logo/GreatPlaceToWork.jpg" alt="Great Place To Work">
                </div>
                <div>
                    <img class="img-fluid" src="https://www.fusionfirst.com/wp-content/uploads/2020/01/Softwareworld.png" alt="Top Rated App Development Software">
                </div>
                <div>
                    <img class="img-fluid" src="https://www.fusionfirst.com/wp-content/uploads/2020/01/shopify-2019.png" alt="Top Developers">
                </div>
                <div>
                    <img class="img-fluid" src="<?= $baseurl ?>/img/Logo/iso27001.jpg" alt="ISO 27001">
                </div>
                <div>
                    <img class="img-fluid" src="<?= $baseurl ?>/img/Logo/iso9001.jpg" alt="ISO 9001">
                </div>

            </div>
        </div>
    </div>
    </div>
</section>
<!-- our blogs -->
<section class="section section-height-3 section-with-shape-divider bg-color-grey-scale-1 border-0 pb-5 m-0">
    <div class="shape-divider" style="height: 123px;">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
            <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "></polygon>
            <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "></polygon>
        </svg>
    </div>
    <div class="container">
        <div class="row justify-content-center pt-3">
            <div class="col-lg-10 text-center">
                <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">Our Recent Blogs
                </h3>
            </div>
        </div>
        <div class="row row-gutter-sm justify-content-center mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" style="animation-delay: 250ms;">
            <?php
            $json = file_get_contents('currentBlog.json');
            $json_data = json_decode($json, true);
            $blogsData = (!empty($json_data)) ? $json_data['rss'] : [];

            $data = $blogsData["channel"]["item"];
            usort($data, function ($a, $b) {
                return (strtotime($b['Date']) < strtotime($a['Date']) ? -1 : 1);
            });
            foreach ($data as $key => $value) {
                // echo "<pre>";
                // echo print_r($value['wp:post_name']);
                // echo print_r($arrayKey);
                // die;
                if ($i < 3) {
                    $i += 1;
            ?>
                    <div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0 d-flex">
                        <a href="<?= $baseurl2 . "/blog/" . $value['wp:post_name']; ?>" class="custom-link-hover-effects text-decoration-none d-flex" data-cursor-effect-hover="plus">
                            <div class="card d-flex thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                                <div class="card-img-top position-relative" style="z-index: 3">
                                    <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
                                        <span class="custom-date-style-1 text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
                                            <span class="position-relative z-index-2">
                                                <?= str_replace(",", "", explode(" ", $value['Date'])[1]); ?>
                                                <span class="d-block custom-font-size-1 positive-ls-2 px-1">
                                                    <?= explode(" ", $value['Date'])[0] . " " . explode(" ", $value['Date'])[2]; ?>
                                                </span>
                                            </span>
                                        </span>
                                    </div>
                                    <img src="<?= $baseurl . "/" . $value['img_url']; ?>" class="img-fluid card-image" alt="<?= $value['title']; ?>" style="width:100%">
                                </div>
                                <div class="card-body p-4 flex-fill">
                                    <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2"><?= $value['category']['#text']; ?></span>
                                    <h4 class="font-weight-semibold text-5 mb-2"><?= $value['title']; ?>
                                    </h4>
                                    <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary viewMore">
                                        Read More
                                        <div class="animated-icon animated fadeIn svg-fill-color-primary ms-2">
                                            <!--?xml version="1.0" ?-->
                                            <svg version="1.1" viewBox="0 0 50 50" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="icon_01672900461512" data-filename="arrow-right.svg" width="27" height="27">
                                                <polygon points="1,26 44.586,26 38.293,32.293 39.707,33.707 48.414,25 39.707,16.293 38.293,17.707 44.586,24 1,24  ">
                                                </polygon>
                                            </svg>
                                        </div>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php }
            } ?>
        </div>
    </div>
</section>
<!-- main -->
<!-- Footer Section starts from here -->
<?php include("footerhome.php"); ?>
<!-- End of Footer Section -->