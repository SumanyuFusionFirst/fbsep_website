<!-- Header Section starts from here -->
<?php include("header.php"); ?>
<!-- End of Header Section -->
<?php
$carier_json = file_get_contents('carrier.json');
$decoded_json = json_decode($carier_json, false);

$url =  isset($_SERVER['HTTPS']) &&
    $_SERVER['HTTPS'] === 'on' ? "https://" : "http://";
$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$url_components = parse_url($url);
//print_r($url);
if (!empty($url_components['query'])) {
    parse_str($url_components['query'], $params);
    //print_r($params);
} else {
    echo '<script type="text/javascript">';
    echo "window.location.href = '/current-openings';";
    echo "</script>";
}
$Filerdata;
foreach ($decoded_json as $value) {

    if ($value->PostName == $params['position']) {
        $Filerdata = $value;
        //print_r($value->PostName);
    }
}
$PositionName = $Filerdata->PostName;
$ApplyLink = $Filerdata->ApplynowLink;
$HtmlData = $Filerdata->JsonData;
$PostFullName = $Filerdata->PostFullName;
$idVal = $Filerdata->id;

?>
<!-- careers start -->
<section class="section section-with-shape-divider page-header page-header-modern page-header-lg border-0 my-0 pt-4 lazyloaded" data-bg-src="<?= $baseurl ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg" style="background-size: cover; background-position: center center; background-image: url('<?= $baseurl ?>/img/demos/business-consulting-3/backgrounds/background-5.jpg');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 align-self-center p-static order-2 text-center">
                <h1 class="font-weight-bold text-color-dark text-10 mb-4"><?= $PostFullName ?></h1>
            </div>
            <div class="col-md-12 align-self-center order-1">
                <ul class="breadcrumb d-block text-center text-5">
                    <li><a href=".">Home</a></li>
                    <li class="active"><a href="careers.php">Careers</a></li>
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

<section>
    <div class="container mt-4" id="Positionsdata">
        <?= $HtmlData ?>
        <div class="row">
            <div class="col-lg-12 col-xl-12">
                <a href="./positiondetails<?= $ApplyLink ?>" id="<?= $idVal ?>" class="btn btn-modern btn-primary btn-outline btn-arrow-effect-1 btn-rounded text-3 mb-3">APPLY NOW<i class="fas fa-arrow-right ms-2"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- <script>
    const positiondetails = document.getElementById("positiondetails")
    positiondetails.addEventListener("click", e => {
        
        localStorage.setItem("CurrentPosition", '{"deptType":"BPO","PositionApplied":"Trainee Associate","relavantExperience":"Do you have more than 6 months of relevant domain experience?"}')
    })
</script> -->

<!-- careers end -->

<!-- Footer Section starts from here -->
<?php include("footerhome.php"); ?>
<!-- End of Footer Section -->