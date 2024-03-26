<?php
// $origin = $_SERVER['HTTP_ORIGIN'];
 
// if ($origin) {
//     Header('Access-Control-Allow-Origin: ' . $origin);
// }
// header("Access-Control-Allow-Origin: *"); // Allow requests from any origin (replace with your domain for better security)
// header("Access-Control-Allow-Methods: GET, POST, OPTIONS"); // Specify allowed HTTP methods
// header("Access-Control-Allow-Headers: Content-Type");
// Header('Access-Control-Allow-Origin: *');
// Header('Access-Control-Allow-Headers: Content-Type');
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $baseurl2 = "https://";
else
    $baseurl2 = "http://";
$baseurl2 .= $_SERVER['HTTP_HOST'];
$baseurl = "https://www2023.fusionfirst.com";
//$baseurl = "http://192.168.1.166:81";

// Check if the "mobile" word exists in User-Agent 
$isMob = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));

// Check if the "tablet" word exists in User-Agent 
//$isTab = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "tablet")); 

// Platform check  
// $isWin = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "windows")); 
// $isAndroid = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "android")); 
// $isIPhone = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "iphone")); 
// $isIPad = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "ipad")); 
// $isIOS = $isIPhone || $isIPad; 


// $url = $_SERVER['REQUEST_URI'];
// $urlF = $baseurl2 . $url;
// $urlsJSON = file_get_contents('urls.json');
// $json_urls = json_decode($urlsJSON, true);
// $metaUrls = (!empty($json_urls)) ? $json_urls['urls'] : [];
// $unexistArr = array_column($metaUrls, 'unexistUrl');

// $isUrlExist = false;
// echo "<pre>";
// print_r($urlF);
// die;

// foreach ($metaUrls as $key => $value) {
//     $unexistUrl1 = str_replace('$baseurl2', $baseurl2, $value["unexistUrl"]);
//     $unexistUrl2 = str_replace('$baseurl2', $baseurl2, $value["unexistUrl"])."/";
//     // print_r($unexistUrl1);
//     // echo "<pre>";
//     // print_r($unexistUrl1);
//     // print_r($urlF);
//     if($unexistUrl1 == $urlF || $unexistUrl2 == $urlF){
//         print_r($unexistUrl1);
//         $redirect = "Location: " . str_replace('$baseurl2', $baseurl2, $value["existUrl"]);
//         $isUrlExist = true;
//         header($redirect);
//         break;
//     }
// }

// echo "<pre>";
// print_r($urlF);
//die;

$urlFull = $_SERVER['REQUEST_URI'];
$last = explode("/", $urlFull, 3);
$url = strtolower('/' . $last[1]);
$json = file_get_contents('meta.json');
$json_data = json_decode($json, true);
$metaData = (!empty($json_data)) ? $json_data['Sheet1'] : [];

$keyname = array_column($metaData, 'URL');
$unexistUrlWithSlash = $urlFull . "/";

if (array_search($urlFull, $keyname)) {
    $arrayKey = array_search($urlFull, $keyname);
} else if (array_search(rtrim($urlFull, '/'), $keyname)) {
    $arrayKey = array_search(rtrim($urlFull, '/'), $keyname);
} else {
    $arrayKey = array_search($url, $keyname);
}
// echo "<pre>";
// print_r($arrayKey);
// die;
$viewData = null;

// echo "<pre>";
// print_r($urlFull);
// die;
if ($arrayKey != '') {
    $viewData = $metaData[$arrayKey];
    if ($viewData["URL"] == $url || $viewData["URL"] == $urlFull) {
        // echo "<pre>";
        // print_r($viewData);
        // print_r($viewData["Page Title"]);
        // print_r($baseurl2);
        // print_r($baseurl);
        // die;
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>
                <?= $viewData["Page Title"] ?>
            </title>
            <meta name="keywords" content="<?= $viewData["Primary Keywords"] ?>, <?= $viewData["Secondary Keywords"] ?>" />
            <!-- <meta name="keywords" content="" /> -->
            <meta name="description" content="<?= $viewData["Meta Description"] ?>">
            <meta name="author" content="FBSPL">
            <!-- twiter card -->
            <meta name="twitter:card" content="summary" />
            <meta name="twitter:site" content="https://www.fusionfirst.com/" />
            <meta name="twitter:title" content="<?= $viewData["Page Title"] ?>" />
            <meta name="twitter:description" content="<?= $viewData["Meta Description"] ?>" />
            <meta name="twitter:image" content="<?= $viewData["Meta Image"] ?>" />

            <!-- OG fields -->
            <meta property="og:title" content="<?= $viewData["Page Title"] ?>" />
            <meta property="og:description" content="<?= $viewData["Meta Description"] ?>" />
            <meta name="image" property="og:image" content="<?= $viewData["Meta Image"] ?>" />
            <link rel="canonical" href="<?= $baseurl2 . $viewData["URL"] ?>" />
            <!-- <meta property="og:image" content="https://www2023.fusionfirst.com/img/FBSPL/header/FBSPL_logo.png" /> -->

        <?php } else { ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>Fusion - Business Solutions, IT Services | Keeping U First.</title>
                <meta name="keywords" content="FBSPL" />
                <meta name="description" content="Fusion - Business Solutions, IT Services | Keeping U First.">
                <meta name="author" content="FBSPL">
                <!-- twiter card -->
                <meta name="twitter:card" content="summary" />
                <meta name="twitter:site" content="https://www.fusionfirst.com/" />
                <meta name="twitter:title" content="<?= $viewData["Page Title"] ?>" />
                <meta name="twitter:description" content="<?= $viewData["Meta Description"] ?>" />
                <meta name="twitter:image" content="<?= $viewData["Meta Image"] ?>" />

                <!-- OG fields -->
                <meta property="og:title" content="<?= $viewData["Page Title"] ?>" />
                <meta property="og:description" content="<?= $viewData["Meta Description"] ?>" />
                <meta name="image" property="og:image" content="<?= $viewData["Meta Image"] ?>" />
                <link rel="canonical" href="<?= $baseurl2 . $viewData["URL"] ?>" />
                <!-- <meta property="og:image" content="https://www2023.fusionfirst.com/img/FBSPL/header/FBSPL_logo.png" /> -->

            <?php } ?>
        <?php } else { ?>
            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1">
                <title>FBSPL | An Awarded Business Process Management Company and IT Services</title>
                <meta name="keywords" content="business process management consulting, business process outsourcing, outsourcing partner" />
                <meta name="description" content="As a business process management consultant & IT service provider, FBSPL is designed to help you increase efficiency and scale your business with ease yet budget friendly.">
                <meta name="author" content="FBSPL">

                <!-- OG fields -->
                <meta property="og:title" content="FBSPL | An Awarded Business Process Management Company and IT Services" />
                <meta property="og:description" content="As a business process management consultant & IT service provider, FBSPL is designed to help you increase efficiency and scale your business with ease yet budget friendly." />
                <meta name="image" property="og:image" content="https://www2023.fusionfirst.com/img/FBSPL/header/FBSPL_logo.png" />
                <link rel="canonical" href="https://www.fusionfirst.com/" />
            <?php } ?>
            <!-- Favicon -->
            <base id="myBase" data-href="<?= $baseurl2 ?>">
            <link rel="shortcut icon" href="<?= $baseurl ?>/img/FBSPL/header/FBSPL_logo.png" type="image/x-icon" />
            <link rel="apple-touch-icon" href="<?= $baseurl ?>/img/FBSPL/header/FBSPL_logo.png">
            <!-- Mobile Metas -->
            <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">
            <!-- Web Fonts  -->
            <link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">
            <!-- Vendor CSS -->
            <link rel="stylesheet" href="<?= $baseurl ?>/vendor/bootstrap/css/bootstrap.min.css">
            <link rel="stylesheet" href="<?= $baseurl ?>/vendor/fontawesome-free/css/all.min.css">
            <link rel="stylesheet" href="<?= $baseurl ?>/vendor/animate/animate.compat.css">
            <link rel="stylesheet" href="<?= $baseurl ?>/vendor/simple-line-icons/css/simple-line-icons.min.css">
            <link rel="stylesheet" href="<?= $baseurl ?>/vendor/owl.carousel/assets/owl.carousel.min.css">
            <link rel="stylesheet" href="<?= $baseurl ?>/vendor/owl.carousel/assets/owl.theme.default.min.css">
              <!-- IFrame Script -->
              <script src="https://www.youtube.com/iframe_api"></script>
            <!-- IFrame Script -->
            <script src="https://unpkg.com/wavesurfer.js@7/dist/wavesurfer.min.js"></script>
            <link rel="stylesheet" href="<?= $baseurl ?>/vendor/magnific-popup/magnific-popup.min.css">
            <!-- Theme CSS -->
            <link href='https://fonts.googleapis.com/css?family=Poppins' defer rel='stylesheet'>
            <link rel="stylesheet" href="<?= $baseurl ?>/css/theme.css">
            <link rel="stylesheet" href="<?= $baseurl ?>/css/theme-elements.css">
            <link rel="stylesheet" href="<?= $baseurl ?>/css/theme-blog.css">
            <link rel="stylesheet" href="<?= $baseurl ?>/css/theme-shop.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/1.1.2/css/bootstrap-multiselect.min.css" />
            <!-- Examples -->
            <link rel="stylesheet" href="<?= $baseurl ?>/css/examples/examples-spotlight-cursor-text.css">
            <!-- Demo CSS -->
            <link rel="stylesheet" href="<?= $baseurl ?>/css/demos/demo-business-consulting.css">
            <link rel="stylesheet" href="<?= $baseurl ?>/css/demos/demo-business-consulting-3.css">
            <!-- Skin CSS -->
            <link id="skinCSS" rel="stylesheet" href="<?= $baseurl ?>/css/skins/skin-business-consulting-3.css">
            <!-- Theme Custom CSS -->
            <link rel="stylesheet" href="<?= $baseurl2 ?>/css/custom.css?<?= date("Y-m-d-H-i-s", time()) ?>">
            <!-- Head Libs -->
            <script src="<?= $baseurl ?>/vendor/modernizr/modernizr.min.js"></script>
            <script type="text/javascript" src="https://widget.clutch.co/static/js/widget.js" defer></script>
            <link rel="stylesheet" href="<?= $baseurl2 ?>/css/reviews.css?<?= date("Y-m-d-H-i-s", time()) ?>"> 
            <link rel="stylesheet" href="<?= $baseurl2 ?>/css/podcast.css?<?= date("Y-m-d-H-i-s", time()) ?>"> 
            <link rel="stylesheet" href="<?= $baseurl2 ?>/css/specific-podcast.css?<?= date("Y-m-d-H-i-s", time()) ?>"> 

            <!-- Google Tag Manager -->   
            <script>
                (function(w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start': new Date().getTime(),
                        event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s),
                        dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-K7JK6GL');
            </script>   
            <!-- End Google Tag Manager -->
            <style>
                .headerImage {
                    background-size: cover !important;
                    background-position: center center !important;
                    background-image: url("https://www2023.fusionfirst.com/img/demos/business-consulting-3/backgrounds/background-5.jpg") !important;
                    top: 0px;
                }

                .mt130 {
                    margin-top: 0px;
                }

                .ms-08 {
                    margin-left: 0.8rem !important;
                }

                #mainNavMobile i {
                    float: right;
                    /* padding: 7px 20px; */
                }

                .socialicon {
                    position: relative;
                    left: -20px;
                }

                /* .owl-carousel:not(.nav-arrows-1):not(.show-nav-title) .owl-nav button[class*="owl-"] {
                    background-color: #f7901e;
                    border-color: #f7901e #f7901e #d2350e;
                    color: #FFF;
                    margin-right: 22px;
                } */
                
                .owl-carousel:not(.nav-arrows-1):not(.show-nav-title) .owl-nav button[class*="owl-"] {
                    /* background-color: #f7901e; */
                    /* border-color: #f7901e #f7901e #d2350e; */
                    /* color: #FFF; */
                    margin-right: -4px;
                }


                .cursornotallowed {
                    cursor: not-allowed;
                }

                @media (max-width: 575px) {
                    #mainNavMobile i {
                        float: right;
                        padding-right: 5px;
                        padding-left: 50px;
                        padding-top: 5px;
                        padding-bottom: 5px;
                    }
                }
            </style>
            </head>

            <body>
                <!-- Google Tag Manager (noscript) -->    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K7JK6GL" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>   
                <!-- End Google Tag Manager (noscript) -->
                <div class="body">
                    <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true}">
                        <div class="header-body border-top-0">
                            <!-- Remove Header Top Class To Sticky -->
                            <div class="header-top-default header-top-borders border-bottom-0 bg-color-light">
                                <div class="container" style="max-width: 1350px;top:-2px">
                                    <div class="header-row">
                                        <div class="header-column justify-content-between">
                                            <div class="header-row">
                                                <nav class="header-nav-top w-100 w-md-50pct w-xl-100pct">
                                                    <ul class="nav nav-pills d-inline-flex custom-header-top-nav-background pe-4">
                                                        <li class="nav-item d-inline-flex z-index-1">
                                                            <span class="font-weight-normal align-items-center px-0  ms-3">
                                                                <span>
                                                                    <i class="fa fa-phone text-4 p-relative top-1 testSize" style="color:white;"></i>
                                                                </span>
                                                                <a class="text-color-light text-decoration-none testSize" href="tel:+1-240-979-0061" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">+1-240-979-0061</a>
                                                            </span>
                                                            <span class="font-weight-normal align-items-center px-0 d-none d-xl-flex ms-3">
                                                                <span>
                                                                    <i class="fa fa-envelope  text-4 p-relative top-1" style="color:white;"></i>&nbsp;
                                                                </span>
                                                                <a class="text-color-light text-decoration-none text-4-5" href="mailto:info@fusionfirst.com" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light" style="font-size:15px !important ">info@fusionfirst.com</a>
                                                            </span>
                                                        </li>
                                                    </ul>
                                                </nav>
                                                <!-- class="d-flex align-items-center w-100" -->
                                                <!-- d-none d-xl-flex ms-3 for hide -->
                                                <div class="d-flex align-items-center w-100 d-none d-xl-flex ms-3" id="ISO">
                                                    <ul class="ps-0 ms-auto mb-0">
                                                        <li class="nav-item font-weight-semibold text-1 text-lg-2 text-color-dark d-none d-md-flex justify-content-end me-3">
                                                            <span class="text-4 text-color-dark">ISO Certified:</span>&nbsp;
                                                            <a href="<?= $baseurl ?>/img/FBSPL/header/Fusion Business_QMS - 2021.pdf" target="_blank" class="text-4 text-color-dark" title="Quality Management System" data-cursor-effect-hover="fit">9001 (QMS)</a>&nbsp; & &nbsp;
                                                            <a href="<?= $baseurl ?>/img/FBSPL/header/Fusion Business - ISO 27001 - 2022.pdf" target="_blank" class="text-4 text-color-dark" title="Information Security Management System" data-cursor-effect-hover="fit">27001 (ISMS)</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="d-flex align-items-center w-100">
                                                    <ul class="ps-0 ms-auto mb-0">
                                                        <li class="nav-item font-weight-semibold text-1 text-lg-2 text-color-dark d-none d-md-flex justify-content-end me-3">
                                                            <a href="./contact-fbspl" target="_blank" class="text-4 text-color-dark" title="United States" data-cursor-effect-hover="fit"><i class="fa-solid fa-location-dot"></i>&nbsp;US&nbsp;</a>|&nbsp;
                                                            <a href="./contact-fbspl" target="_blank" class="text-4 text-color-dark" title="United Kingdom" data-cursor-effect-hover="fit">&nbsp;UK&nbsp;</a>|&nbsp;
                                                            <a href="./contact-fbspl" target="_blank" class="text-4 text-color-dark" title="Canada" data-cursor-effect-hover="fit">&nbsp;CA&nbsp;</a>|&nbsp;
                                                            <a href="./contact-fbspl" target="_blank" class="text-4 text-color-dark" title="India" data-cursor-effect-hover="fit">&nbsp;IN&nbsp;</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="nav nav-pills p-relative bottom-2">
                                                        <li class="nav-item padding2px d-lg-inline-flex">
                                                            <a href="https://www.facebook.com/FBSPLTeam" target="_blank" title="Facebook" rel="nofollow" class="text-color-dark text-color-hover-primary text-3 ms-08 anim-hover-translate-top-5px transition-2ms"><i class="fab fa-facebook-f text-3 p-relative top-1" style="color:#3b5998"></i></a>
                                                        </li>
                                                        <li class="nav-item padding2px pe-0 d-lg-inline-flex">
                                                            <a href="https://twitter.com/FBSPLTeam" target="_blank" title="Twitter" rel="nofollow" class="text-color-dark text-color-hover-primary text-3  anim-hover-translate-top-5px transition-2ms"><img alt="Twitter" src="<?= $baseurl ?>/img/TwitterX.svg" class="text-color-dark text-color-hover-primary text-3 ms-08 anim-hover-translate-top-5px transition-2ms " height="14px" /></a>
                                                        </li>
                                                        <li class="nav-item padding2px d-lg-inline-flex">
                                                            <a href="https://www.instagram.com/fbsplteam/" target="_blank" title="Instagram" rel="nofollow" class="text-color-dark text-color-hover-primary text-3 ms-08 anim-hover-translate-top-5px transition-2ms"><i class="fab fa-instagram text-3 p-relative top-1" style="color: rgb(214,41,118)"></i></a>
                                                        </li>
                                                        <li class="nav-item padding2px pe-0 d-lg-inline-flex">
                                                            <a href="https://www.linkedin.com/company/fbsplteam" target="_blank" title="Linkedin" rel="nofollow" class="text-color-dark text-color-hover-primary text-3 ms-08 anim-hover-translate-top-5px transition-2ms"><i class="fab fa-linkedin-in text-3 p-relative top-1" style="color:#0077b5"></i></a>
                                                        </li>
                                                        <li class="nav-item padding2px pe-0 d-lg-inline-flex d-none">
                                                            <a href="https://www.youtube.com/@FBSPLTeam" target="_blank" title="Youtube" rel="nofollow" class="text-color-dark text-color-hover-primary text-3 ms-08 anim-hover-translate-top-5px transition-2ms"><i class="fab fa-youtube text-3 p-relative top-1" style="color:#f61f17"></i></a>
                                                        </li>
                                                        <li class="nav-item padding2px pe-0 d-lg-inline-flex">
                                                            <a href="https://www.pinterest.com/FBSPLTeam/" target="_blank" title="Pinterest" rel="nofollow" class="text-color-dark text-color-hover-primary text-3 ms-08 anim-hover-translate-top-5px transition-2ms"><i class="fab fa-pinterest text-3 p-relative top-1" style="color:#E60023"></i></a>
                                                        </li>
                                                        <li class="nav-item padding2px pe-0 d-lg-inline-flex d-none">
                                                            <!-- <a href="https://www.pinterest.com/fusionbusinesssolutions/" target="_blank" title="Pinterest"
                                                    class="text-color-dark text-color-hover-primary text-3 ms-08 anim-hover-translate-top-5px transition-2ms"><i
                                                        class="fab fa-pinterest text-3 p-relative top-1" style="color:#E60023"></i></a> -->
                                                            <a href="https://www.glassdoor.co.in/Reviews/Fusion-Business-Solutions-Reviews-E779386.htm" aria-label="Glassdoor" rel="nofollow" target="_blank"><img alt="Glassdoor" src="<?= $baseurl ?>/img/FBSPL/icons/glassdoor-icon.svg" class="text-color-dark text-color-hover-primary text-3 ms-08 anim-hover-translate-top-5px transition-2ms " height="14px" /></a>
                                                        </li>
                                                        <li class="nav-item padding2px pe-0 d-lg-inline-flex">
                                                            <!-- <a href="https://www.pinterest.com/fusionbusinesssolutions/" target="_blank" title="Pinterest"
                                                    class="text-color-dark text-color-hover-primary text-3 ms-08 anim-hover-translate-top-5px transition-2ms"><i
                                                        class="fab fa-pinterest text-3 p-relative top-1" style="color:#E60023"></i></a> clutch.png-->
                                                            <a href="https://clutch.co/profile/fusion-business-solutions-p" target="_blank" aria-label="Clutch" rel="nofollow"><img alt="Clutch" src="<?= $baseurl ?>/img/FBSPL/icons/clutch.png" class="text-color-dark text-color-hover-primary text-3 ms-08 anim-hover-translate-top-5px transition-2ms " height="16px" /></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- header-container remove for fixed height -->
                            <!-- style="height: 95px;" -->
                            <div class="header-container container" style="max-width: 1500px;">
                                <div class="header-row">
                                    <div class="header-column">
                                        <div class="header-row">
                                            <div class="header-logo">
                                                <a href="<?= $baseurl2 ?>">
                                                    <img alt="FBSPL" class="logoHeight" src="<?= $baseurl ?>/img/FBSPL/header/fbspllogo.svg">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-column justify-content-end w-100">
                                        <div class="header-row">
                                            <div class="header-nav header-nav-links order-2 order-lg-1">
                                                <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                                    <nav class="collapse">
                                                        <ul class="nav nav-pills" id="mainNavMobile">
                                                            <!-- About -->
                                                            <li class="dropdown">
                                                                <a href="<?= $baseurl2 ?>/about-fbspl" class="nav-link dropdown-toggle">
                                                                    About &nbsp; <i class="fa-solid fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <li>
                                                                        <a href="<?= $baseurl2 ?>/about-fbspl" class="dropdown-item">About Us</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= $baseurl2 ?>/client-testimonial-reviews" class="dropdown-item">Testimonials</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <!-- Services -->
                                                            <li class="dropdown">
                                                                <a href="<?= $baseurl2 ?>/bpm-outsourcing-services" class="nav-link dropdown-toggle">
                                                                    Services &nbsp; <i class="fa-solid fa-angle-down"> </i>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <!-- <li>
                                                            <a href="./bpm-outsourcing-services" class="dropdown-item">Services</a>
                                                        </li> -->
                                                                    <li>
                                                                        <a href="<?= $baseurl2 ?>/insurance-bpo-outsourcing" class="dropdown-item" aria-label="Insurance">Insurance</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= $baseurl2 ?>/recruitment-outsourcing-rpo" class="dropdown-item" aria-label="RPO">Recruitment Process
                                                                            Outsourcing</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= $baseurl2 ?>/accounting-bookkeeping-services" class="dropdown-item" aria-label="Accounting & Bookkeeping">Accounting & Bookkeeping</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= $baseurl2 ?>/e-commerce-outsourcing-services" class="dropdown-item" aria-label="E-commerce">E-commerce</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= $baseurl2 ?>/insurance-agency-optimization-services" class="dropdown-item" aria-label="Insurance Agency Optimization">Insurance Agency Optimization</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= $baseurl2 ?>/data-annotation-services" aria-label="Data Annotation" class="dropdown-item">Data
                                                                            Annotation</a>
                                                                    </li>
                                                                    <!-- <li>
                                                                        <a href="<?= $baseurl2 ?>/medical-healthcare-outsourcing" class="dropdown-item" aria-label="Healthcare">Healthcare</a>
                                                                    </li> -->
                                                                    <li>
                                                                        <a href="<?= $baseurl2 ?>/customer-support-outsourcing" class="dropdown-item" aria-label="Customer Support">Customer Support</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <!-- Cases -->
                                                            <li>
                                                                <a class="nav-link" href="<?= $baseurl2 ?>/case-studies" aria-label="Cases">
                                                                    Cases
                                                                </a>
                                                            </li>
                                                            <!-- CSR -->
                                                            <li>
                                                                <a class="nav-link" href="<?= $baseurl2 ?>/csr-social-responsibilities" aria-label="CSR">
                                                                    CSR
                                                                </a>
                                                            </li>
                                                            <!-- Career -->
                                                            <li class="dropdown">
                                                                <a href="<?= $baseurl2 ?>/careers" class="nav-link dropdown-toggle" aria-label="Careers">
                                                                    Careers &nbsp;<i class="fa-solid fa-angle-down"></i>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    <!-- <li>
                                                            <a href="./careers" class="dropdown-item">Careers</a>
                                                        </li> -->
                                                                    <li>
                                                                        <a href="<?= $baseurl2 ?>/current-openings" class="dropdown-item">Current Openings</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= $baseurl2 ?>/life-at-fbspl" class="dropdown-item">Life @
                                                                            FBSPL</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <!-- podcast -->
                                                            <li>
                                                                <a class="nav-link" href="<?= $baseurl2 ?>/podcast">
                                                                    Podcast
                                                                </a>
                                                            </li>
                                                            <!-- Blogs -->
                                                            <li>
                                                                <a class="nav-link" href="<?= $baseurl2 ?>/blog">
                                                                    Blog
                                                                </a>
                                                            </li>
                                                            <!-- Contact -->
                                                            <li>
                                                                <a class="nav-link" href="<?= $baseurl2 ?>/contact-fbspl">
                                                                    Contact
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </nav>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="header-column header-column-search justify-content-end align-items-center d-flex w-auto flex-row">
                                        <a href="<?= $baseurl2 ?>/book-free-consultation-call" class="btn btn-dark btn-modern btn-rounded font-weight-semibold text-3-5 btn-px-3 py-2 ws-nowrap ms-4 d-none d-lg-block" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light" aria-label="Get Consultation"><span><i class="fa-solid fa-phone"></i>&nbsp; Free Consultation</span></a>
                                    </div>
                                </div>
                                <a class="btn header-btn-collapse-nav" href="<?= $baseurl2 ?>/book-free-consultation-call" style="background-color:black">
                                    <i class="fa-solid fa-phone"></i>
                                </a>
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav" name="Menu" value="Menu">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                </div>
                </div>
                </header>