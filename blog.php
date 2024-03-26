<?php
$json = file_get_contents('currentBlog.json');
$json_data = json_decode($json, true);
$blogsData = (!empty($json_data)) ? $json_data['rss'] : [];
$data = $blogsData["channel"]["item"];

usort($data, function ($a, $b) {
    return (strtotime($b['Date']) < strtotime($a['Date']) ? -1 : 1);
});

$array = array_column($data, 'category');
$flag = array("RPO", "Insurance","E-commerce" ,"Accounting & bookkeeping", "Healthcare", "Customer Support", "other");

$flagRPO = "RPO";
$resourcesRPO = count(array_filter($array, function ($var) use ($flagRPO) {
    return ($var['nicename'] == $flagRPO);
}));

$flagInsurance = "Insurance";
$resourcesInsurance = count(array_filter($array, function ($var) use ($flagInsurance) {
    return ($var['nicename'] == $flagInsurance);
}));

$flagEcommerce= "E-commerce";
$resourcesEcommerce = count(array_filter($array, function ($var) use ($flagEcommerce) {
    return ($var['nicename'] == $flagEcommerce);
}));

$flagAccounting = "Accounting & bookkeeping";
$resourcesAccounting = count(array_filter($array, function ($var) use ($flagAccounting) {
    return ($var['nicename'] == $flagAccounting);
}));

$flagHealthcare = "Healthcare";
$resourcesHealthcare = count(array_filter($array, function ($var) use ($flagHealthcare) {
    return ($var['nicename'] == $flagHealthcare);
}));

$flagCustomer = "Customer Support";
$resourcesCustomer = count(array_filter($array, function ($var) use ($flagCustomer) {
    return ($var['nicename'] == $flagCustomer);
}));

$flagData = "DataAnnotation";
$resourcesData = count(array_filter($array, function ($var) use ($flagData) {
    return ($var['nicename'] == $flagData);
}));

$flagother = "other";
$resourcesother = count(array_filter($array, function ($var) use ($flagother) {
    return ($var['nicename'] == $flagother);
}));

// $flagRPO = "RPO";
// $resourcesRPO = count(array_filter($array, function ($var) use ($flagRPO) {
//     return ($var['nicename'] == $flagRPO);
// }));


// echo "<pre>";
// echo "data";
// echo count($array);
// print_r($array);
// $flag = "RPO";
// $resources = array_filter($array, function ($var) use ($flag) {
//     return ($var['nicename'] == $flag);
// });
// echo count($resources);
// die;

// echo "<pre>";
// echo print_r($data);
// die;
?>
<!-- Header Section starts from here -->
<?php include("header.php"); ?>
<!-- End of Header Section -->
<?php include("loader.php"); ?>
<section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 pt-4 lazyloaded" data-bg-src="<?= $baseurl ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg" style="background-size: cover; background-position: center center; background-image: url('<?= $baseurl ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="font-weight-bold text-color-dark text-10">Blog</h1>
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
    <div> <ul class="nav nav-pills sort-source mb-4" data-sort-id="portfolio" data-option-key="filter" data-plugin-options="{'layoutMode': 'masonry', 'filter': '*'}">
                <li class="nav-item active" data-option-value="*" class=""><a class="nav-link active btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">Show All</a></li>
                <li class="nav-item" data-option-value=".Insurance"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">Insurance</a></li>
                <li class="nav-item" data-option-value=".E-commerce"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">E-commerce</a></li>
                <li class="nav-item" data-option-value=".RPO"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">RPO</a></li>
                <li class="nav-item" data-option-value=".Accounting"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">Accounting & Bookkeeping</a></li>
                <li class="nav-item" data-option-value=".Healthcare"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">Healthcare</a></li>
                <li class="nav-item" data-option-value=".Customer"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">Customer Support</a></li>
                <li class="nav-item" data-option-value=".DataAnnotation"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">Data Annotation</a></li>
                <li class="nav-item" data-option-value=".other"><a class="nav-link btn btn-outline custom-border-width btn-primary custom-border-radius custom-border-radius-small text-uppercase me-2 mb-2" href="#">Other</a></li>
            </ul></div>
    <div class="row pt-1 pb-4 mb-3">
        <div class="col-lg-9">
           
            <div class="sort-destination-loader sort-destination-loader-showing">
                <div class="row portfolio-list sort-destination" data-sort-id="portfolio">
                    <?php foreach ($data as $key => $value) { ?>
                        <div class="col-lg-6 isotope-item <?= $value['category']['nicename']; ?>">
                            <a href="<?= $baseurl2 . "/blog/" . $value['wp:post_name']; ?>" class="custom-link-hover-effects text-decoration-none" data-cursor-effect-hover="plus">
                                <span class="thumb-info custom-thumb-info-style-1 mb-4 pb-1 thumb-info-hide-wrapper-bg">
                                    <div class="card">
                                        <div class="card-img-top position-relative " style="z-index: 3">
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
                                        <div class="card-body p-4">
                                            <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2"><?= $value['category']['#text']; ?></span>
                                            <h4 class="font-weight-semibold text-5 mb-2" style="height:130px"><?= $value['title']; ?>
                                            </h4>
                                            <span class="custom-view-more d-inline-flex font-weight-medium text-color-primary" style="margin-top: 15px;">
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
                                </span>
                            </a>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mt-4 mt-lg-0">
            <aside class="sidebar">
                <h5 class="font-weight-semi-bold">Subscribe to Newsletter</h5>
                <form id="newsletterForm" class="form-style-3 w-100" method="POST" novalidate="novalidate">
                    <div class="d-flex mb-4">
                        <input class="form-control bg-color-grey border-0 box-shadow-none" placeholder="Email Address" name="newsletterEmail" id="newsletterEmail" type="email" required>
                        <input id="newslettersubmit" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3" type="submit" value="Go">
                    </div>
                </form>
                <!-- <h5 class="font-weight-semi-bold">Categories</h5>
                <ul class="nav nav-list flex-column mb-5">
                    <li class="nav-item"><a class="nav-link" href="#">Accounting (1)</a></li>
                    <li class="nav-item"> <a class="nav-link active" href="#">Blog (102)</a>
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="#">Bookkeeping (2)</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#">outsourcing company (8)</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Software</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Business Consulting Services USA (5)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Business Process Outsourcing (30)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Business Tips (4)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Data management (1)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Fusion Business Solution Pvt. Ltd. (1)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Healthcare (1)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">HR (1)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Insurance (4)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Outsourcing Customer Service (3)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pre-Sales (1)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Recruitment Process Outsourcing (9)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Remote Technology (1)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">RPO (5)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">virtual assistant (9)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Virtual Assistant Services USA (8)</a></li>
                </ul> -->
                <h5 class="font-weight-semi-bold">Categories</h5>
                <ul class="nav nav-list flex-column mb-5">
                    <li class="nav-item"><a class="nav-link" onclick="showBlog('Insurance')">Insurance (<?= $resourcesInsurance ?>)</a></li>
                    <li class="nav-item"><a class="nav-link" onclick="showBlog('E-commerce')">E-commerce (<?= $resourcesEcommerce ?>)</a></li>
                    <!-- <ul>
                        <li class="nav-item"><a class="nav-link " title="How Data Management Benefits The Insurance Agencies" href="./insuranceblog1">How Data Management...</a></li>
                        <li class="nav-item"><a class="nav-link" title="Insurance Outsourcing: An Arising New Industry" href="./insuranceblog2">Insurance Outsourcing...</a></li>
                    </ul> -->
                    <li class="nav-item"><a class="nav-link" onclick="showBlog('RPO')">RPO (<?= $resourcesRPO ?>)</a></li>
                    <!-- <ul>
                            <li class="nav-item"><a class="nav-link"title="The Future of Outsourced Talent Acquisition" href="./rpoblog">The Future of Outsourced...</a></li>
                            <li class="nav-item"><a class="nav-link" title="Recruitment Process Outsourcing: Is It A Recent Trend In HR?" href="./rpoblog2">Recruitment Process Outs...</a></li>
                        </ul> -->
                    <li class="nav-item"><a class="nav-link" onclick="showBlog('Accounting')">Accounting (<?= $resourcesAccounting ?>)</a></li>
                    <!-- <ul>
                            <li class="nav-item"><a class="nav-link"title="Increase Efficiency by Outsourcing Bookkeeping or Accounting Services" href="./accountingblog1">Increase Efficiency by Outso...</a></li>
                            <li class="nav-item"><a class="nav-link" title="How to Benefit Your Business by Outsourcing Bookkeeping Activities?" href="./accountingblog2">How to Benefit Your Business...</a></li>
                        </ul> -->
                    <li class="nav-item"><a class="nav-link" onclick="showBlog('Healthcare')">Healthcare (<?= $resourcesHealthcare ?>)</a></li>
                    <!-- <ul>
                            <li class="nav-item"><a class="nav-link"title="How Can Healthcare Providers Improve Patient Experience" href="./healthcareblog1">How Can Healthcare Pro...</a></li>
                        </ul> -->
                    <li class="nav-item"><a class="nav-link" onclick="showBlog('Customer')">Customer Support (<?= $resourcesCustomer ?>)</a></li>
                    <li class="nav-item"><a class="nav-link" onclick="showBlog('DataAnnotation')">DataAnnotation (<?= $resourcesData ?>)</a></li>
                    <li class="nav-item"><a class="nav-link" onclick="showBlog('other')">Others (<?= $resourcesother ?>)</a></li>
                    <!-- <ul>
                            <li class="nav-item"><a class="nav-link"title="How Does A Customer Service BPO Help in Boosting Company’s Growth?" href="./customerblog1">How Does A Customer Serv...</a></li>
                            <li class="nav-item"><a class="nav-link"title="Do You Need A Customer Service BPO?" href="./customerblog2">Do You Need A Customer Ser...</a></li>
                </ul> -->
                    <!-- <ul>
                            <li class="nav-item"><a class="nav-link" href="#">Bookkeeping (2)</a></li>
                            <li class="nav-item"><a class="nav-link active" href="#">outsourcing company (8)</a></li>
                            <li class="nav-item"><a class="nav-link" href="#">Software</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#">Business Consulting Services USA (5)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Business Process Outsourcing (30)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Business Tips (4)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Data management (1)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Fusion Business Solution Pvt. Ltd. (1)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">HR (1)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Insurance (4)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Outsourcing Customer Service (3)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Pre-Sales (1)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Recruitment Process Outsourcing (9)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Remote Technology (1)</a></li>
                    
                    <li class="nav-item"><a class="nav-link" href="#">virtual assistant (9)</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Virtual Assistant Services USA (8)</a></li> -->
                </ul>
                <div class="tabs tabs-dark mb-4 pb-2">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item" role="presentation"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#recentPosts" data-bs-toggle="tab" aria-selected="true" role="tab">Recent Posts</a></li>
                    </ul>
                    <div class="tab-pane" id="recentPosts" role="tabpanel">
                        <ul class="simple-post-list">
                            <?php foreach (array_slice($data, 0, 3) as $key => $value) { ?>
                                <li>
                                    <div class="post-image">
                                        <div class="img-thumbnail img-thumbnail-no-borders d-block"> <a> <img src="<?= $baseurl . "/" . $value['img_url']; ?>" width="50" height="50" alt=""> </a> </div>
                                    </div>
                                    <div class="post-info"> <a href="<?= $baseurl2 . "/blog/" . $value['wp:post_name']; ?>"><?= substr($value['title'], 0, 40) . "...."; ?>
                                        </a>
                                        <div class="post-meta"><?= $value['Date']; ?></div>
                                    </div>
                                </li>
                            <?php  } ?>
                        </ul>
                    </div>
                </div>
        </div>
        </aside>
    </div>
</div>
<a href="https://www.ontoplist.com/best-marketing-advertising-blogs/" target="_blank"><img src="https://www.ontoplist.com/images/ontoplist31.png?id=6426e948eb064" alt="Best Marketing and Advertising Blogs to Follow - OnToplist.com" border="0" style="display:none"></a>
<script>
    function showBlog(val) {
        document.querySelector(`[data-option-value='.${val}'] a`).click()
    }
</script>
<script src="<?= $baseurl2 ?>/js/newsletter.js"></script>
<!-- Footer Section starts from here -->
<?php include("footerhome.php"); ?>
<!-- End of Footer Section -->