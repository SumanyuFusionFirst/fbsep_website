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
$json = file_get_contents("currentCase.json");
$json_data = json_decode($json, true);
$blogsData = !empty($json_data) ? $json_data["rss"] : [];
$data = $blogsData["channel"]["item"];

$keyname = array_column($data, "wp:post_name");
$arrayKey = array_search($lastSegment, $keyname);

// echo "<pre>";
// print_r($data);
// print_r($keyname);
// die;

if ($arrayKey === 0 || $arrayKey != "") {
    // print_r("value".strval($arrayKey));
    // die;
    $viewData = $data[$arrayKey];
    $str1 = str_replace('<?=$baseurl?>', $baseurl, $viewData["content:encoded"]);
    $str2 = str_replace('<?=$baseurl2?>', $baseurl2, $str1);
    echo str_replace("@@888@@", '"', $str2);
    include "casestudies.php";
    include "footerhome.php";
?>
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

<script src="<?= $baseurl2 ?>/js/cases.js?d=<?= date("Y-m-d-H-i-s", time()) ?>" fileName="Insurance1"></script>