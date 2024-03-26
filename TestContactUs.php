<?php
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
if (array_search($urlFull, $keyname)) {
    $arrayKey = array_search($urlFull, $keyname);
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
            <meta name='robots' content='noindex, nofollow'>
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
                <meta name='robots' content='noindex, nofollow'>
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
                <meta name='robots' content='noindex, nofollow'>

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

                .owl-carousel:not(.nav-arrows-1):not(.show-nav-title) .owl-nav button[class*="owl-"] {
                    background-color: #f7901e;
                    border-color: #f7901e #f7901e #d2350e;
                    color: #FFF;
                    margin-right: 22px;
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
                                                        <li class="nav-item padding2px d-lg-inline-flex">
                                                            <a href="https://twitter.com/FBSPLTeam" target="_blank" title="Twitter" rel="nofollow" class="text-color-dark text-color-hover-primary text-3 ms-08 anim-hover-translate-top-5px transition-2ms"><i class="fab fa-twitter text-3 p-relative top-1" style="color:#00acee"></i></a>
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
                                                                        <a href="<?= $baseurl2 ?>/data-annotation-services" aria-label="Data Annotation" class="dropdown-item">Data
                                                                            Annotation</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="<?= $baseurl2 ?>/medical-healthcare-outsourcing" class="dropdown-item" aria-label="Healthcare">Healthcare</a>
                                                                    </li>
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
                <?php include("loader.php"); ?>
                <section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 pt-4 lazyloaded" data-bg-src="<?= $baseurl ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg" style="background-size: cover; background-position: center center; background-image: url('<?= $baseurl ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg');">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 align-self-center p-static order-2 text-center">
                                <h1 class="font-weight-bold text-color-dark text-10">Contact Us</h1>
                            </div>
                            <div class="col-md-12 align-self-center order-1">
                                <ul class="breadcrumb d-block text-center text-5">
                                    <li><a href=".">Home</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="shape-divider shape-divider-bottom shape-divider-reverse-x" style="height: 123px;">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 1920 123" preserveAspectRatio="xMinYMin">
                            <polygon fill="#F3F3F3" points="0,90 221,60 563,88 931,35 1408,93 1920,41 1920,-1 0,-1 "></polygon>
                            <polygon fill="#FFFFFF" points="0,75 219,44 563,72 930,19 1408,77 1920,25 1920,-1 0,-1 "></polygon>
                        </svg>
                    </div>
                </section>

                <div class="container">

                    <div class="row p-4">
                        <div class="col-lg-12 text-center text-lg-start py-5 py-lg-0 align-self-center m-0 pt-0">

                            <div class="card border-0 bg-color-light">
                                <div class="card px-lg-5 py-5 box-shadow-6 border-radius-2">

                                    <h2 class="text-color-dark font-weight-bold text-6 ls-0 pb-2 mb-3">Let's Connect</h2>

                                    <div class="contact-form form-style-3">
                                        <div class="row row-gutter-sm">
                                            <div class="form-group col-lg-6 p-0 px-3 m-0 my-2">
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required="" placeholder="Your Name" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32">
                                            </div>
                                            <div class="form-group col-lg-6 p-0 px-3 m-0 my-2">
                                                <input type="text" value="" data-msg-required="Please enter your phone number." class="form-control" name="phone" id="phone" required="" placeholder="Phone Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');" maxlength="10">
                                            </div>
                                        </div>
                                        <div class="row row-gutter-sm">
                                            <div class="form-group col-lg-6 p-0 px-3 m-0 my-2">
                                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required="" placeholder="Your Email">
                                            </div>
                                            <div class="form-group col-lg-6 p-0 px-3 m-0 my-2">
                                                <input type="text" value="" maxlength="100" class="form-control" name="Where did you find us?" id="sub" placeholder="Where did you find us?" required="" data-msg-email="" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || event.charCode == 32">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col p-0 px-3 m-0 my-2">
                                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control" name="message" id="note" placeholder="Your Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col mb-2 mt-2">
                                                <button class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3" id="SubmitTest">Submit NOW<i class="fas fa-arrow-right ms-2"></i></button>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                        <div class="col-lg-1"></div>


                    </div>

                </div>

                <!-- footer start -->
                <div class="home-intro m-0 p-0 pt-2 footerDesktop" id="home-intro">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center text-4 mb-2">
                                <p>
                                    Let us upgrade and streamline your business process now.
                                </p>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="form-group col">
                                    <!-- <a href="./book-free-consultation-call"
                        class="btn btn-modern btn-primary btn-outline-light btn-arrow-effect-1 btn-rounded text-3 mt-2">Schedule
                        a Trial<i class="fas fa-arrow-right ms-2"></i></a>
                    <span class="text-color-light text-5 font-weight-normal m-2 mt-2"
                        style="vertical-align:middle">or</span> -->
                                    <a href="./contact-fbspl" class="btn btn-modern btn-primary btn-outline-light btn-arrow-effect-1 btn-rounded text-3 mt-2">Let's
                                        Talk<i class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>


                <!-- mobile view -->

                <div class="home-intro m-0 p-0 pt-0 bg-dark footerMobile" id="home-intro">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12" style="background: url('<?= $baseurl ?>/img/FooterFinal.webp');background-size: contain;height: 16vh;background-repeat: no-repeat;">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center text-2">
                                <p class="mb-2" style="
               color: #fff;
               ">
                                    Let us upgrade and streamline your business process now.
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <div class="form-group col">
                                    <!-- <a href="#" class="btn btn-modern btn-primary btn-outline-light btn-arrow-effect-1 btn-rounded text-1">Schedule
               a Trial<i class="fas fa-arrow-right ms-2"></i></a>
               <span class="text-color-light text-5 font-weight-normal m-2 mt-2" style="vertical-align:middle">or</span> -->
                                    <a href="#" class="btn btn-modern btn-primary btn-outline-light btn-arrow-effect-1 btn-rounded text-1">Let's
                                        Talk<i class="fas fa-arrow-right ms-2"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="section section-text-light section-background overlay overlay-show overlay-color-dark m-0 pt-4 p-4 bg-dark">
                    <div class="container-fluid">
                        <div class="row justify-content-md-center">
                            <div class="col-lg-9 custom-sm-margin-top">
                                <div class="row">
                                    <div class="col-lg-4 custom-sm-margin-top">
                                        <h5 class="mb-1">USA</h5>
                                        <ul class="list list-icons list-icons-lg">
                                            <li class="d-flex px-0 mb-1">
                                                <div class="animated-icon animated fadeIn svg-fill-color-light">
                                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 419 420" style="enable-background:new 0 0 419 420;" xml:space="preserve" id="icon_61671184050973" data-filename="phone.svg" width="25" height="25">
                                                        <path d="M303.7,411.1c-15.6-0.1-31.2-2.1-46.4-5.9c-52.4-12.6-106.4-44.7-152-90.4s-77.7-99.6-90.4-152
                              C1.7,107.8,11.2,60.6,41.7,30.1l8.7-8.7c16.5-16.4,43.1-16.4,59.6,0l50.1,50.1c16.5,16.5,16.5,43.2,0,59.6l-29.6,29.6
                              c14.2,24.9,33.5,49.8,56.3,72.6s47.8,42.1,72.6,56.3l29.6-29.6c16.5-16.5,43.1-16.5,59.6,0c0,0,0,0,0,0l50.1,50.1
                              c16.5,16.5,16.5,43.1,0,59.6l-8.7,8.7C368.5,400,338.7,411.1,303.7,411.1z M80.2,39c-3.2,0-6.3,1.3-8.6,3.6l-8.7,8.7
                              c-22.9,22.9-29.6,60-18.8,104.5c11.4,47.1,40.6,96.1,82.4,137.9s90.7,71,137.9,82.4c44.5,10.7,81.6,4.1,104.5-18.8l8.7-8.7
                              c4.7-4.7,4.7-12.4,0-17.2l-50.1-50.1c-4.7-4.7-12.4-4.7-17.2,0l-37.5,37.5c-4.6,4.6-11.7,5.7-17.5,2.7c-30.8-15.9-61.8-39-89.6-67
                              s-51-58.9-66.9-89.6c-3-5.8-1.9-12.9,2.7-17.5l37.5-37.5c4.7-4.7,4.7-12.4,0-17.2L88.8,42.6C86.5,40.3,83.4,39,80.2,39z">
                                                        </path>
                                                        <path d="M319.8,230.7c-8.3,0-15-6.7-15-15l0,0c-0.1-54.8-44.5-99.2-99.3-99.3c-8.3,0-15-6.7-15-15s6.7-15,15-15l0,0
                              c71.3,0,129.3,58,129.3,129.3C334.8,224,328,230.7,319.8,230.7C319.8,230.7,319.8,230.7,319.8,230.7z">
                                                        </path>
                                                        <path d="M383.1,230.7c-8.3,0-15-6.7-15-15l0,0c0-89.7-73-162.7-162.6-162.7c-8.3,0-15-6.7-15-15s6.7-15,15-15l0,0
                              c106.2,0,192.6,86.4,192.6,192.7C398.1,224,391.4,230.7,383.1,230.7L383.1,230.7z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <a href="tel:+1-240-979-0061" class="text-color-light text-2-4 ms-2">+1-240-979-0061</a>
                                            </li>
                                            <li class="d-flex text-color-light px-0 mb-1">
                                                <div class="animated-icon animated fadeIn svg-fill-color-light me-2">
                                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                                    <svg version="1.1" id="icon_181671184050975" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 433" style="enable-background:new 0 0 330 433;" xml:space="preserve" data-filename="map-pin.svg" width="25" height="25">
                                                        <path d="M165,414.2c-2.6,0-5.1-0.7-7.3-1.9C68.3,362.4,13,268.1,13,165.8c0-2.1,0-4.1,0.1-6.1c1-45.5,17.9-83.8,49-110.8
                              C89.5,25.1,126.1,12,165,12s75.5,13.1,102.9,36.9c31.1,27,48.1,65.3,49,110.8l0,0c0,2,0.1,4.1,0.1,6.1c0,51-13.8,101.1-40,144.9
                              c-25.4,42.4-61.5,77.4-104.6,101.6C170.1,413.5,167.6,414.2,165,414.2z M165,42c-31.7,0-61.3,10.5-83.3,29.6
                              c-24.5,21.3-37.9,51.9-38.7,88.7c0,1.8-0.1,3.7-0.1,5.5c0,88.4,46.3,170.4,122,216c35.4-21.4,65-51.1,86.3-86.6
                              c23.4-39.1,35.7-83.8,35.7-129.4c0-1.8,0-3.7-0.1-5.5c-0.8-36.8-14.2-67.5-38.7-88.7C226.3,52.5,196.7,42,165,42z">
                                                        </path>
                                                        <path d="M165.4,260.6c-52.1,0-94.3-42.2-94.3-94.3S113.3,72,165.4,72s94.3,42.2,94.3,94.3C259.7,218.3,217.5,260.5,165.4,260.6z
                              M165.4,102c-35.5,0-64.3,28.8-64.3,64.3s28.8,64.3,64.3,64.3s64.3-28.8,64.3-64.3c0,0,0,0,0,0C229.6,130.8,200.9,102,165.4,102
                              L165.4,102z"></path>
                                                    </svg>
                                                </div>
                                                <p class="text-color-light text-2-4 ms-2">Briarcliff Manor, NY 10510</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 custom-sm-margin-top">
                                        <h5 class="mb-1">UK</h5>
                                        <ul class="list list-icons list-icons-lg">
                                            <li class="d-flex px-0 mb-1">
                                                <div class="animated-icon animated fadeIn svg-fill-color-light">
                                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 419 420" style="enable-background:new 0 0 419 420;" xml:space="preserve" id="icon_61671184050973" data-filename="phone.svg" width="25" height="25">
                                                        <path d="M303.7,411.1c-15.6-0.1-31.2-2.1-46.4-5.9c-52.4-12.6-106.4-44.7-152-90.4s-77.7-99.6-90.4-152
                              C1.7,107.8,11.2,60.6,41.7,30.1l8.7-8.7c16.5-16.4,43.1-16.4,59.6,0l50.1,50.1c16.5,16.5,16.5,43.2,0,59.6l-29.6,29.6
                              c14.2,24.9,33.5,49.8,56.3,72.6s47.8,42.1,72.6,56.3l29.6-29.6c16.5-16.5,43.1-16.5,59.6,0c0,0,0,0,0,0l50.1,50.1
                              c16.5,16.5,16.5,43.1,0,59.6l-8.7,8.7C368.5,400,338.7,411.1,303.7,411.1z M80.2,39c-3.2,0-6.3,1.3-8.6,3.6l-8.7,8.7
                              c-22.9,22.9-29.6,60-18.8,104.5c11.4,47.1,40.6,96.1,82.4,137.9s90.7,71,137.9,82.4c44.5,10.7,81.6,4.1,104.5-18.8l8.7-8.7
                              c4.7-4.7,4.7-12.4,0-17.2l-50.1-50.1c-4.7-4.7-12.4-4.7-17.2,0l-37.5,37.5c-4.6,4.6-11.7,5.7-17.5,2.7c-30.8-15.9-61.8-39-89.6-67
                              s-51-58.9-66.9-89.6c-3-5.8-1.9-12.9,2.7-17.5l37.5-37.5c4.7-4.7,4.7-12.4,0-17.2L88.8,42.6C86.5,40.3,83.4,39,80.2,39z">
                                                        </path>
                                                        <path d="M319.8,230.7c-8.3,0-15-6.7-15-15l0,0c-0.1-54.8-44.5-99.2-99.3-99.3c-8.3,0-15-6.7-15-15s6.7-15,15-15l0,0
                              c71.3,0,129.3,58,129.3,129.3C334.8,224,328,230.7,319.8,230.7C319.8,230.7,319.8,230.7,319.8,230.7z">
                                                        </path>
                                                        <path d="M383.1,230.7c-8.3,0-15-6.7-15-15l0,0c0-89.7-73-162.7-162.6-162.7c-8.3,0-15-6.7-15-15s6.7-15,15-15l0,0
                              c106.2,0,192.6,86.4,192.6,192.7C398.1,224,391.4,230.7,383.1,230.7L383.1,230.7z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <a href="tel:+44-203-290-8897" class="text-color-light text-2-4 ms-2">+44-203-290-8897</a>
                                            </li>
                                            <li class="d-flex text-color-light px-0 mb-1">
                                                <div class="animated-icon animated fadeIn svg-fill-color-light me-2">
                                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                                    <svg version="1.1" id="icon_181671184050975" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 433" style="enable-background:new 0 0 330 433;" xml:space="preserve" data-filename="map-pin.svg" width="25" height="25">
                                                        <path d="M165,414.2c-2.6,0-5.1-0.7-7.3-1.9C68.3,362.4,13,268.1,13,165.8c0-2.1,0-4.1,0.1-6.1c1-45.5,17.9-83.8,49-110.8
                              C89.5,25.1,126.1,12,165,12s75.5,13.1,102.9,36.9c31.1,27,48.1,65.3,49,110.8l0,0c0,2,0.1,4.1,0.1,6.1c0,51-13.8,101.1-40,144.9
                              c-25.4,42.4-61.5,77.4-104.6,101.6C170.1,413.5,167.6,414.2,165,414.2z M165,42c-31.7,0-61.3,10.5-83.3,29.6
                              c-24.5,21.3-37.9,51.9-38.7,88.7c0,1.8-0.1,3.7-0.1,5.5c0,88.4,46.3,170.4,122,216c35.4-21.4,65-51.1,86.3-86.6
                              c23.4-39.1,35.7-83.8,35.7-129.4c0-1.8,0-3.7-0.1-5.5c-0.8-36.8-14.2-67.5-38.7-88.7C226.3,52.5,196.7,42,165,42z">
                                                        </path>
                                                        <path d="M165.4,260.6c-52.1,0-94.3-42.2-94.3-94.3S113.3,72,165.4,72s94.3,42.2,94.3,94.3C259.7,218.3,217.5,260.5,165.4,260.6z
                              M165.4,102c-35.5,0-64.3,28.8-64.3,64.3s28.8,64.3,64.3,64.3s64.3-28.8,64.3-64.3c0,0,0,0,0,0C229.6,130.8,200.9,102,165.4,102
                              L165.4,102z"></path>
                                                    </svg>
                                                </div>
                                                <p class="text-color-light text-2-4 ms-2">Kenton, HA3 0HQ</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 custom-sm-margin-top">
                                        <h5 class="mb-1">CANADA</h5>
                                        <ul class="list list-icons list-icons-lg">
                                            <li class="d-flex px-0 mb-1">
                                                <div class="animated-icon animated fadeIn svg-fill-color-light">
                                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 419 420" style="enable-background:new 0 0 419 420;" xml:space="preserve" id="icon_61671184050973" data-filename="phone.svg" width="25" height="25">
                                                        <path d="M303.7,411.1c-15.6-0.1-31.2-2.1-46.4-5.9c-52.4-12.6-106.4-44.7-152-90.4s-77.7-99.6-90.4-152
                              C1.7,107.8,11.2,60.6,41.7,30.1l8.7-8.7c16.5-16.4,43.1-16.4,59.6,0l50.1,50.1c16.5,16.5,16.5,43.2,0,59.6l-29.6,29.6
                              c14.2,24.9,33.5,49.8,56.3,72.6s47.8,42.1,72.6,56.3l29.6-29.6c16.5-16.5,43.1-16.5,59.6,0c0,0,0,0,0,0l50.1,50.1
                              c16.5,16.5,16.5,43.1,0,59.6l-8.7,8.7C368.5,400,338.7,411.1,303.7,411.1z M80.2,39c-3.2,0-6.3,1.3-8.6,3.6l-8.7,8.7
                              c-22.9,22.9-29.6,60-18.8,104.5c11.4,47.1,40.6,96.1,82.4,137.9s90.7,71,137.9,82.4c44.5,10.7,81.6,4.1,104.5-18.8l8.7-8.7
                              c4.7-4.7,4.7-12.4,0-17.2l-50.1-50.1c-4.7-4.7-12.4-4.7-17.2,0l-37.5,37.5c-4.6,4.6-11.7,5.7-17.5,2.7c-30.8-15.9-61.8-39-89.6-67
                              s-51-58.9-66.9-89.6c-3-5.8-1.9-12.9,2.7-17.5l37.5-37.5c4.7-4.7,4.7-12.4,0-17.2L88.8,42.6C86.5,40.3,83.4,39,80.2,39z">
                                                        </path>
                                                        <path d="M319.8,230.7c-8.3,0-15-6.7-15-15l0,0c-0.1-54.8-44.5-99.2-99.3-99.3c-8.3,0-15-6.7-15-15s6.7-15,15-15l0,0
                              c71.3,0,129.3,58,129.3,129.3C334.8,224,328,230.7,319.8,230.7C319.8,230.7,319.8,230.7,319.8,230.7z">
                                                        </path>
                                                        <path d="M383.1,230.7c-8.3,0-15-6.7-15-15l0,0c0-89.7-73-162.7-162.6-162.7c-8.3,0-15-6.7-15-15s6.7-15,15-15l0,0
                              c106.2,0,192.6,86.4,192.6,192.7C398.1,224,391.4,230.7,383.1,230.7L383.1,230.7z"></path>
                                                    </svg>
                                                </div>
                                                <a href="tel:+1-240-979-0061" class="text-color-light text-2-4 ms-2">+1-240-979-0061</a>
                                            </li>
                                            <li class="d-flex text-color-light px-0 mb-1">
                                                <div class="animated-icon animated fadeIn svg-fill-color-light me-2">
                                                    <!--?xml version="1.0" encoding="utf-8"?-->
                                                    <svg version="1.1" id="icon_181671184050975" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 330 433" style="enable-background:new 0 0 330 433;" xml:space="preserve" data-filename="map-pin.svg" width="25" height="25">
                                                        <path d="M165,414.2c-2.6,0-5.1-0.7-7.3-1.9C68.3,362.4,13,268.1,13,165.8c0-2.1,0-4.1,0.1-6.1c1-45.5,17.9-83.8,49-110.8
                              C89.5,25.1,126.1,12,165,12s75.5,13.1,102.9,36.9c31.1,27,48.1,65.3,49,110.8l0,0c0,2,0.1,4.1,0.1,6.1c0,51-13.8,101.1-40,144.9
                              c-25.4,42.4-61.5,77.4-104.6,101.6C170.1,413.5,167.6,414.2,165,414.2z M165,42c-31.7,0-61.3,10.5-83.3,29.6
                              c-24.5,21.3-37.9,51.9-38.7,88.7c0,1.8-0.1,3.7-0.1,5.5c0,88.4,46.3,170.4,122,216c35.4-21.4,65-51.1,86.3-86.6
                              c23.4-39.1,35.7-83.8,35.7-129.4c0-1.8,0-3.7-0.1-5.5c-0.8-36.8-14.2-67.5-38.7-88.7C226.3,52.5,196.7,42,165,42z">
                                                        </path>
                                                        <path d="M165.4,260.6c-52.1,0-94.3-42.2-94.3-94.3S113.3,72,165.4,72s94.3,42.2,94.3,94.3C259.7,218.3,217.5,260.5,165.4,260.6z
                              M165.4,102c-35.5,0-64.3,28.8-64.3,64.3s28.8,64.3,64.3,64.3s64.3-28.8,64.3-64.3c0,0,0,0,0,0C229.6,130.8,200.9,102,165.4,102
                              L165.4,102z"></path>
                                                    </svg>
                                                </div>
                                                <p class="text-color-light text-2-4 ms-2">Orton
                                                    Park Road, M1G 3H2</p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 custom-sm-margin-top mt-4">
                                        <h5 class="mb-1">QUICK ACCESS</h5>
                                        <ul class="list list-icons list-icons-sm">
                                            <li>
                                                <i class="fas fa-angle-right text-color-default"></i>
                                                <a href="./faqs" class="link-hover-style-1 ms-1 text-color-light">FAQs</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-angle-right text-color-default"></i>
                                                <a href="./blog" class="link-hover-style-1 ms-1 text-color-light">Blog</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-angle-right text-color-default"></i>
                                                <a href="./submit-guest-post" class="link-hover-style-1 ms-1 text-color-light">Become a
                                                    Guest Writer</a>
                                            </li>

                                            <li>
                                                <i class="fas fa-angle-right text-color-default"></i>
                                                <a href="./sitemap" class="link-hover-style-1 ms-1 text-color-light">Sitemap</a>
                                            </li>
                                            <!-- <li>
                     <i class="fas fa-angle-right text-color-default"></i>
                     <a href="demo-business-consulting-3-contact.html"
                     class="link-hover-style-1 ms-1 text-color-light">Privacy Policy</a>
                     </li>
                     <li>
                     <i class="fas fa-angle-right text-color-default"></i>
                     <a href="demo-business-consulting-3-contact.html"
                     class="link-hover-style-1 ms-1 text-color-light">Terms of Use</a>
                     </li> -->
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 custom-sm-margin-top mt-4">
                                        <h5 class="mb-1">FOR CLIENTS</h5>
                                        <ul class="list list-icons list-icons-sm">
                                            <!-- <li>
                     <i class="fas fa-angle-right text-color-default"></i>
                     <a href="demo-business-consulting-3-contact.html"
                        class="link-hover-style-1 ms-1 text-color-light">Services</a>
                  </li> -->
                                            <li>
                                                <i class="fas fa-angle-right text-color-default"></i>
                                                <a href="./book-free-consultation-call" class="link-hover-style-1 ms-1 text-color-light">Free Consultation</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-angle-right text-color-default"></i>
                                                <a href="./client-testimonial-reviews" class="link-hover-style-1 ms-1 text-color-light">Testimonials</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-angle-right text-color-default"></i>
                                                <a href="./privacy-policy" class="link-hover-style-1 ms-1 text-color-light">Privacy
                                                    Policy</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-angle-right text-color-default"></i>
                                                <a href="./security-measures-at-fbspl" class="link-hover-style-1 ms-1 text-color-light">Security Measures</a>
                                            </li>
                                            <li>
                                                <i class="fas fa-angle-right text-color-default"></i>
                                                <a href="./gdpr" class="link-hover-style-1 ms-1 text-color-light">GDPR</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 custom-sm-margin-top d-flex flex-column align-items-start justify-content-center footerMargin">
                                        <div class="clutch-widget" data-url="https://widget.clutch.co" data-widget-type="13" data-height="50" data-nofollow="true" data-expandifr="true" data-clutchcompany-id="907308"></div>
                                        <div class="clutch-widget" data-url="https://widget.clutch.co" data-widget-type="7" data-height="65" data-nofollow="true" data-expandifr="true" data-clutchcompany-id="907308"></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 custom-sm-margin-top">
                                <h2 class="font-weight-bold">- Let's Connect</h2>
                                <form class="contact-form custom-contact-form-style-1 form-errors-light" id="BodyEmailfooter" method="POST">

                                    <input type="hidden" name="subject" value="Contact Message Received" />
                                    <div class="row">
                                        <div class="form-group col my-1">
                                            <div class="custom-input-box">
                                                <i class="icon-user icons text-color-primary" style="top:8px !important;left:8px !important"></i>
                                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name*" id="namefooter" style="height: 34px;" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col my-1">
                                            <div class="custom-input-box">
                                                <i class="icon-envelope icons text-color-primary" style="top:8px !important;left:8px !important"></i>
                                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Email*" id="emailfooter" style="height: 34px;" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col my-1 mb-2">
                                            <div class="custom-input-box">
                                                <i class="fa fa-search icons text-color-primary" style="top:8px !important;left:8px !important"></i>
                                                <input class="form-control" type="text" name="source" id="sourcefooter" placeholder="Where did you find us*" style="height: 34px;" />
                                                <!-- <datalist id="productName">
                                        <option value="Reference">Word of mouth/Reference</option>
                                        <option value="Google Ads">Google Ads</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="YouTube">YouTube</option>
                                        <option value="Twitter">Twitter</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Pinterest">Pinterest</option>
                                        <option value="LinkedIn">LinkedIn</option>
                                        <option value="Email">Email</option>
                                        <option value="Newspaper">Newspaper</option>
                                    </datalist> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col my-1">
                                            <div class="custom-input-box">
                                                <i class="icon-bubble icons text-color-primary" style="top:18px !important;left:8px !important"></i>
                                                <textarea style="min-height: 60px  !important;" maxlength="5000" type="text" data-msg-required="Please enter your message." rows="2" class="form-control" name="message" placeholder="Message*" id="subfooter"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col mt-2">
                                            <button class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3" id="submitfooter">SUBMIT
                                                NOW<i class="fas fa-arrow-right ms-2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="bg-dark" id="cookies">
                    <!-- <div class="cookiescontainer"> -->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-9 text-center">
                                <p class="text-light mt-3">This website uses cookies to ensure you get the best experience on our website. <a href="./privacy-policy">More info</a></p>
                            </div>
                            <div class="col-lg-3 text-center">
                                <button id="cookies-btn" class="mt-2 mb50">That's fine!</button>
                            </div>
                        </div>
                    </div>
                    <!-- </div> -->
                </section>

                <footer id="footer" class="bg-dark">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center pb-4">
                                <p>© 2023 All Rights Reserved - Fusion Business Solutions (P) Limited</p>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- footer end -->
                </div>
                <!-- Vendor -->
                <script defer src="<?= $baseurl ?>/vendor/plugins/js/plugins.min.js"></script>
                <script defer src="<?= $baseurl ?>/vendor/particles/particles.min.js"></script>

                <!-- Theme Base, Components and Settings -->
                <script defer src="<?= $baseurl2 ?>/js/theme.js"></script>




                <!-- Theme Initialization Files -->
                <script defer src="<?= $baseurl2 ?>/js/theme.init.js"></script>
                <script defer src="<?= $baseurl2 ?>/js/custom.js?d=<?= date("Y-m-d-H-i-s", time()) ?>"></script>
                <script defer src="<?= $baseurl2 ?>/js/jd.js"></script>
                <script defer src="<?= $baseurl2 ?>/js/mobileView.js"></script>
                <!-- Examples -->
                <script defer src="<?= $baseurl2 ?>/js/examples/examples.particles.js"></script>

                <!-- Start of HubSpot Embed Code -->
                <!-- End of HubSpot Embed Code -->
                <script>
                    document.getElementById("SubmitTest").addEventListener("click", () => {
                        alert("Form has been submited.")
                    });
                </script>

            </body>

            </html>