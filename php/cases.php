<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';  


header('Access-Control-Allow-Origin: *'); 
$baseurl= "https://www2023.fusionfirst.com"; 
$name1 = $_POST['name1']; 
//  $phone1 = $_POST['phone1']; 
//  $CompanyName = $_POST['CompanyName'];
 $email1= $_POST['email1']; 
 $url= $_POST['url'];
//  $source = $_POST['source'];
//  $timezone= $_POST['timezone'];
//  $note1= $_POST['note1'];
//  $checkBox = $_POST['checkBox'];

if($email1!='' && $name1!='' && $url!=''){
     $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';  
$subject = "Case Study";
$message = "<div style='margin:0 auto;display:block;max-width:600px;width:100%'> 
<table align=center cellpadding=0 cellspacing=0 style='font:normal 13px arial;border:solid 3px #333;
max-width:600px;width:100%'width=600> 
<tr> <td style='border:1px solid #e8e8e8;padding:20px 0 10px;
color:#444;font-weight:700;font-size:20px;height:50px' height='45px' align=center colspan=2 valign=middle>
<img src='https://www.fusionfirst.com/wp-content/uploads/2021/07/FBSPL_logo-e1626778596200.png' style='height:50px' ></td></tr>
<tr> 
<td style='padding:10px 0;color:#444;font-weight:700;font-size:20px;background-color:#f1be3c;color:#fff'
align=center colspan=2>Case Study</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'width=150>
<strong>Name</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'width=444>". $name1 ."</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'>
<strong>Email</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'>". $email1 ."</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'><strong>Url for full case study</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'><a href=". $url ." target='_blank'>". $url ."</a></td></tr>
<tr><td style='border:1px solid #e8e8e8;font-size:11px;text-align:center;padding:10px 10px'align=center colspan=2 valign=middle>Source Referring URL:<a href='https://www.fusionfirst.com' target=_blank> https://www.fusionfirst.com</a></td></tr></table> </div>";
$message.=  '</table>' ;
// require 'classphpmailer1.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'marketing@fusionfirst.com';                 // SMTP username ashish.dwivedi@fusionoutsourcing.com
    $mail->Password = 'Mos30261';                           // SMTP password mypass123
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('marketing@fusionfirst.com', 'FBSPL');
    $mail->addCC($email1,'Reply');
    //$mail->addAddress('devsb3@fusionfirst.com', 'Ojal');     // Add a recipient
    $mail->addAddress('marketing@fusionfirst.com');               // Name is optional
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = $message;

     $mail->send();
   echo json_encode(array("Data"=>'sent'));
} catch (Exception $e) {
    echo json_encode(array("Data"=>'Error'));
}
}
?>