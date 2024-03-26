<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';  

header('Access-Control-Allow-Origin: *'); 
 $namefooter = $_POST['namefooter']; 
 $subfooter = $_POST['subfooter']; 
 $emailfooter = $_POST['emailfooter'];
 $sourcefooter= $_POST['sourcefooter'];
if($emailfooter!='' && $namefooter!=''){
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
        $subject = "Contact Inquiry";
$message = "<div style='margin:0 auto;display:block;max-width:600px;width:100%'> 
<table align=center cellpadding=0 cellspacing=0 style='font:normal 13px arial;border:solid 3px #333;
max-width:600px;width:100%'width=600> 
<tr> <td style=' height:45px; border:1px solid #e8e8e8;padding:20px 0 10px;
color:#444;font-weight:700;font-size:20px'align=center colspan=2 valign=middle>
<img src='https://www.fusionfirst.com/wp-content/uploads/2021/07/FBSPL_logo-e1626778596200.png' style='height:50px' ></td></tr>
<tr> 
<td style='padding:10px 0;color:#444;font-weight:700;font-size:20px;background-color:#1f2d5e;color:#fff'
align=center colspan=2>Contact Request</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'width=150>
<strong>Name</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'width=444>". $namefooter ."</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'>
<strong>Email</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'>". $emailfooter ."</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'><strong>Message</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'>". $subfooter ."</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'><strong>Where did you find us</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'>". $sourcefooter ."</td></tr>
<tr><td style='border:1px solid #e8e8e8;font-size:11px;text-align:center;padding:10px 10px'align=center colspan=2 valign=middle>Source Referring URL:<a href='https://www.fusionfirst.com' target=_blank> https://www.fusionfirst.com</a></td></tr></table> </div><p><b>SERVER VARIABLES (FOR TRACKING, PLEASE IGNORE):</b></p>" . "</p><p><b>User IP Address:</b> " . $ipaddress."</p>" ;
// foreach($_SERVER as $paramName => $varServer) {
//     if (isset($_SERVER[$paramName])) { 
//         $message.=  '<tr><td>'.$paramName.'</td><td>'.$_SERVER[$paramName].'</td></tr>' ; 
//     } 
//     else { 
//         $message.=  '<tr><td>'.$paramName.'</td><td>-</td></tr>' ; 
//     } 
// } 
$message.=  '</table>' ;
// require 'class.phpmailerfooter.php';



$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
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
    $mail->addCC($emailfooter,'Reply');
    // $mail->addReplyTo('$email', "Reply");
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