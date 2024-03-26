<?php
// Date in the past
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
?>
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

$url = $_SERVER['REQUEST_URI'];
$urlF = $baseurl2 . $url;

if (preg_match('/[A-Z]/', $urlF)) {
    $redirect = "Location: " . strtolower($urlF);
    $isUrlExist = true;
    header($redirect, true, 301);
    exit;
    die;
}


$urlsJSON = file_get_contents('urls.json');
$json_urls = json_decode($urlsJSON, true);
$metaUrls = (!empty($json_urls)) ? $json_urls['urls'] : [];
$unexistArr = array_column($metaUrls, 'unexistUrl');

$isUrlExist = false;
// echo "<pre>";
// print_r($urlF);
// die;


// $curvalue = array_filter($metaUrls, function ($var) use (
//     $urlF, $baseurl2
// ) {
//     return str_replace('$baseurl2', $baseurl2, $var["unexistUrl"]) == $urlF;
// });

// echo "<pre>";
// print_r($curvalue);
// die;


foreach ($metaUrls as $key => $value) {
    $unexistUrl1 = strtolower(str_replace('$baseurl2', $baseurl2, $value["unexistUrl"]));
    $unexistUrl2 = strtolower(str_replace('$baseurl2', $baseurl2, $value["unexistUrl"])) . "/";
    // print_r($unexistUrl1);
    // echo "<pre>";
    // print_r($unexistUrl1);
    // print_r($urlF);

    $urlF2;
    if ($urlF[-1] != '/') {
        $urlF2 = $urlF . "/";
    } else {
        $urlF2 = $urlF;
    }

    if ($unexistUrl1 == $urlF || $unexistUrl2 == $urlF || $unexistUrl1 == $urlF2 || $unexistUrl2 == $urlF2) {
        print_r($unexistUrl1);
        $redirect = "Location: " . strtolower(str_replace('$baseurl2', $baseurl2, $value["existUrl"]));
        $isUrlExist = true;

        header($redirect, true, 301);
        exit;
        break;
    }
}

if ($isUrlExist == false) {
    header("Location: " . $baseurl2 . "/404", true, 301);
    exit;
}
?>