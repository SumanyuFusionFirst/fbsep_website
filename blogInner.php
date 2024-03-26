<?php
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
?>
<?php include "header.php"; ?>
<?php include "loader.php"; ?>
<?php
error_reporting(E_ALL);
ini_set("display_errors", "1");
$url = $_SERVER["REQUEST_URI"];
$lastSegment = basename(parse_url($url, PHP_URL_PATH));
$json = file_get_contents("currentBlog.json");
$json_data = json_decode($json, true);
$blogsData = !empty($json_data) ? $json_data["rss"] : [];
$data = $blogsData["channel"]["item"];
usort($data, function ($a, $b) {
    return strtotime($b["Date"]) < strtotime($a["Date"]) ? -1 : 1;
});
$keyname = array_column($data, "wp:post_name");
$arrayKey = array_search($lastSegment, $keyname);
if ($arrayKey === 0 || $arrayKey != "") {
    $viewData = $data[$arrayKey];
    if ($viewData["wp:post_name"] == "basic-comprehensive-guide-to-data-annotation-services-and-labelling-in-machine-learning-artificial-intelligence") {
        $str1 = str_replace('<?=$baseurl?>', $baseurl, $viewData["content:encoded"]);
        echo str_replace('<?=$baseurl2?>', $baseurl2, $str1);
        $i = 0;
        include "contactus.php";
    } elseif ($viewData["wp:post_name"] == "top-10-lead-generation-techniques-for-accounting-and-bookkeeping") {
        $str1 = str_replace('<?=$baseurl?>', $baseurl, $viewData["content:encoded"]);
        echo str_replace('<?=$baseurl2?>', $baseurl2, $str1);
        $i = 0;
        include "freeconsultation.php";
    } elseif ($viewData["wp:post_name"] == "best-practices-for-healthcare-support-services") {
        $str1 = str_replace('<?=$baseurl?>', $baseurl, $viewData["content:encoded"]);
        $str2 = str_replace('<?=$baseurl2?>', $baseurl2, $str1);
        echo str_replace("@@888@@", '"', $str2);
        $i = 0;
        include "contactus.php";
    } else {
        $str1 = str_replace('<?=$baseurl?>', $baseurl, $viewData["content:encoded"]);
        $str2 = str_replace('<?=$baseurl2?>', $baseurl2, $str1);
        echo str_replace("@@888@@", '"', $str2);
        $i = 0;
    }
?>
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
                    <h3 class="text-9 line-height-3 text-transform-none font-weight-semibold mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200" style="animation-delay: 200ms;">Related Articles
                    </h3>
                </div>
            </div>
            <div class="row row-gutter-sm justify-content-center mb-4 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="250" style="animation-delay: 250ms;">
                <?php
                $currentCategory = $viewData["category"]["nicename"];
                $filteredData = array_filter($data, function ($var) use ($currentCategory) {
                    return $var["category"]["nicename"] == $currentCategory;
                });
                if (!(count($filteredData) >= 3)) {
                    $filteredData = $data;
                }
                foreach ($filteredData as $key => $value) {
                    if ($lastSegment != $value["wp:post_name"] && $i < 3) {
                        $i += 1; ?>
                        <div class="col-sm-9 col-md-6 col-lg-4 mb-4 mb-lg-0 d-flex">
                            <a href="<?= $baseurl2 . "/blog/" . $value["wp:post_name"] ?>" class="custom-link-hover-effects text-decoration-none d-flex" data-cursor-effect-hover="plus">
                                <div class="card d-flex thumb-info custom-thumb-info-style-1 thumb-info-hide-wrapper-bg">
                                    <div class="card-img-top position-relative" style="z-index: 3">
                                        <div class="position-absolute bottom-10 right-0 d-flex justify-content-end w-100 py-3 px-4 z-index-3">
                                            <span class="custom-date-style-1 text-center bg-primary text-color-light font-weight-semibold text-5-5 line-height-2 px-3 py-2">
                                                <span class="position-relative z-index-2">
                                                    <?= str_replace(",", "", explode(" ", $value["Date"])[1]) ?>
                                                    <span class="d-block custom-font-size-1 positive-ls-2 px-1">
                                                        <?= explode(" ", $value["Date"])[0] . " " . explode(" ", $value["Date"])[2] ?>
                                                    </span>
                                                </span>
                                            </span>
                                        </div>
                                        <img src="<?= $baseurl . "/" . $value["img_url"] ?>" class="img-fluid card-image" alt="<?= $value["title"] ?>" style="width:100%">
                                    </div>
                                    <div class="card-body p-4 flex-fill">
                                        <span class="d-block text-color-grey font-weight-semibold positive-ls-2 text-2"><?= $value["category"]["#text"] ?></span>
                                        <h4 class="font-weight-semibold text-5 mb-2"><?= $value["title"] ?>
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
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </section>
    <?php include "footerhome.php"; ?>
<?php
} else {
?>
    <?php
    if (isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] === "on") {
        $burl2 = "https://";
    } else {
        $burl2 = "http://";
    }
    $burl2 .= $_SERVER["HTTP_HOST"];
    $burl = "https://www2023.fusionfirst.com";
    $url = $_SERVER["REQUEST_URI"];
    $urlF = $burl2 . $url;
    if (preg_match("/[A-Z]/", $urlF)) {
        $redirect = "Location: " . strtolower($urlF);
        $isUrlExist = true;
        header($redirect, true, 301);
        exit();
        die();
    }
    $urlsJSON = file_get_contents("urls.json");
    $json_urls = json_decode($urlsJSON, true);
    $metaUrls = !empty($json_urls) ? $json_urls["urls"] : [];
    $unexistArr = array_column($metaUrls, "unexistUrl"); // print_r($unexistArr); // echo "<pre>"; // die;
    $isUrlExist = false;
    foreach ($metaUrls as $key => $value) {
        $unexistUrl1 = strtolower(str_replace('$baseurl2', $burl2, $value["unexistUrl"]));
        $unexistUrl2 = strtolower(str_replace('$baseurl2', $burl2, $value["unexistUrl"])) . "/";
        $urlF2;
        if ($urlF[-1] != '/') {
            $urlF2 = $urlF . "/";
        } else {
            $urlF2 = $urlF;
        }
        if ($unexistUrl1 == $urlF || $unexistUrl2 == $urlF || $unexistUrl1 == $urlF2 || $unexistUrl2 == $urlF2) {
            $redirect = strtolower(str_replace('$baseurl2', $burl2, $value["existUrl"]));
            print_r($redirect);
            $isUrlExist = true;
            echo '<script type="text/javascript">';
            echo "window.location.href = '${$redirect}';";
            echo "</script>";
    ?>

            <script>
                window.location.href = "<?= $redirect
                                        ?>"
            </script>

        <?php
            exit();
            break;
        }
    }
    if ($isUrlExist == false) { ?>
        <script>
            window.location.href = "<?= $baseurl2
                                    ?>/404"
        </script>
    <?php exit();
    }
    ?>
<?php
}
?>


<script>
    document.querySelector("#header").style.height = "90px"
    document.querySelector(".header-container").style.height = "85px"
    document.querySelector(".header-body").style.position = "fixed"
    document.querySelector(".header-body").style.top = "0px"
    window.addEventListener('DOMContentLoaded', (event) => {
        console.log('DOM fully loaded and parsed');
        const loadingOverlay = document.querySelector(".loading-overlay")
        setTimeout(() => {
            loadingOverlay.style.visibility = "hidden"
            loadingOverlay.style.opacity = "0"
        }, 1500);
    });
</script>

<!-- <script>
    const getLink1 = document.getElementById("getLink1");
    const demoform1 = document.getElementById("demo-form1");
    const CasePDF1 = document.getElementById("CasePDF1");
    const getLink2 = document.getElementById("getLink2");
    const demoform2 = document.getElementById("demo-form2");
    const CasePDF2 = document.getElementById("CasePDF2");
    const getLink3 = document.getElementById("getLink3");
    const demoform3 = document.getElementById("demo-form3");
    const CasePDF3 = document.getElementById("CasePDF3");

    let getUrl = document.getElementById("myBase").getAttribute("data-href");

checkLocalStorage();

function checkLocalStorage() {
    debugger
  const urlSearchParams = new URLSearchParams(window.location.search);
  const params = Object.fromEntries(urlSearchParams.entries());
  if (params.q) {
    let data = JSON.parse(atob(params.q));
    if (data.key && new Date() < new Date(data.expiryDate)) {
      let a = document.querySelector(".custom-read-more-style-1");
      let data = document.querySelectorAll(".readmore-overlay");
      let AccessNow = document.querySelector('[data-bs-target="#formModal"]');
      //AccessNow.style.display = "none"
      AccessNow.remove();
      //Array.from(data).forEach(e => e.style.display = "none")
      Array.from(data).forEach((e) => e.remove());
      a.style.height = "max-content";
      a.style.overflowY = "auto";
    } else {
      let extraData = document.getElementById("extraData");
      extraData.remove();
    }
  }
}

function randomStr(len, arr) {
  var ans = "";
  for (var i = len; i > 0; i--) {
    ans += arr[Math.floor(Math.random() * arr.length)];
  }
  return ans;
}

console.log(randomStr(30, "0123456789qwertyuioplkjhgfdsazxcvbnm"));
getLink1.addEventListener("click", (e) => {
  debugger
  e.preventDefault();
  if (demoform.checkValidity() == false) {
    return;
  } else {
    let key = randomStr(30, "0123456789qwertyuioplkjhgfdsazxcvbnm");
    let date = new Date();
    let obj = new Object();
    obj.expiryDate = date.setDate(date.getDate() + 7);
    obj.key = key;
    let currentUrlwithKey = `${document
      .getElementById("myBase")
      .getAttribute("data-href")}/${window.location.href.split("/")[3]}/${
      window.location.href.split("/")[4]
    }?q=${btoa(JSON.stringify(obj))}`;
    localStorage.setItem(caseName, JSON.stringify(obj));
    var name = demoform.querySelectorAll("input")[0].value;
    var email = demoform.querySelectorAll("input")[1].value;
    debugger
    // console.log(CasePDF.value)
    if(CasePDF.value != 0){
      var URL = CasePDF.value;
    }else{
      var URL = currentUrlwithKey;
      
    }
    // var URL = currentUrlwithKey;
    debugger
    var send_data = { email1: email, name1: name, url: URL };
    a = document.querySelectorAll("#getLink");
    a[0].closest("#formModal").style.display = "none";
    document.querySelector(".loading-overlay").classList.remove("loading-bg");
    document.querySelector(".loading-overlay").classList.add("loading-tp-bg");
    document.querySelector(".loading-overlay").style.visibility = "visible";
    document.querySelector(".loading-overlay").style.opacity = "1";
    document.getElementById("messagesuccesss").innerHTML =
      "Loading please wait...";
    sendEmail(send_data);
    //window.open(currentUrlwithKey, '_blank');
  }
});

function sendEmail(send_data) {
  $.ajax({
    url: `${getUrl}/php/cases`,
    type: "post",
    dataType: "json",
    data: send_data,
    success: function (result) {
      if (result.Data == "sent") {
        document.querySelector(".loading-overlay").style.opacity = "0";
        document.querySelector(".loading-overlay").style.visibility = "hidden";
        document
          .querySelector(".loading-overlay")
          .classList.remove("loading-tp-bg");
        document.querySelector(".loading-overlay").classList.add("loading-bg");
        document.getElementById("messagesuccesss").innerHTML =
          "Loading please wait...";
        window.location.href = `${document
          .getElementById("myBase")
          .getAttribute("data-href")}/mail-success`;
      }
    },
    error: function (result) {
      document.querySelector(".loading-overlay").style.opacity = "0";
      document.querySelector(".loading-overlay").style.visibility = "hidden";
      document
        .querySelector(".loading-overlay")
        .classList.remove("loading-tp-bg");
      document.querySelector(".loading-overlay").classList.add("loading-bg");
      console.log(result);
      alert("Internal Server Error");
    },
  });
}

</script>     -->