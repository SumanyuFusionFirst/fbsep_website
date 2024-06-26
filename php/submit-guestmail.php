<?php
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';   

header('Access-Control-Allow-Origin: *'); 
 $name = $_POST['name']; 
 $website = $_POST['website']; 
 $email = $_POST['email'];
 $linkedInprofile= $_POST['linkedInprofile'];
 $articletitle= $_POST['articletitle'];
 $TargetKeywords= $_POST['TargetKeywords'];
 $ArticleDescription= $_POST['ArticleDescription'];
 $Authorbio= $_POST['Authorbio'];
 $Headshot= $_POST['Headshot'];
 $publishedcontentPath= $_POST['publishedcontentPath'];
 $ArticleimagesPath= $_POST['ArticleimagesPath'];
if($email!='' && $name!=''){
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
        $subject = "Guest Writer Request";
$message = "<div style='margin:0 auto;display:block;max-width:600px;width:100%'> 
<table align=center cellpadding=0 cellspacing=0 style='font:normal 13px arial;border:solid 3px #333;
max-width:600px;width:100%'width=600> 
<tr> <td style=' height:45px; border:1px solid #e8e8e8;padding:20px 0 10px;
color:#444;font-weight:700;font-size:20px'align=center colspan=2 valign=middle>
<img src='https://www.fusionfirst.com/wp-content/uploads/2021/07/FBSPL_logo-e1626778596200.png' style='height:50px' ></td></tr>
<tr> 
<td style='padding:10px 0;color:#444;font-weight:700;font-size:20px;background-color:#1f2d5e;color:#fff'
align=center colspan=2>Guest Writer Request</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'width=150>
<strong>Name</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'width=444>". $name ."</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'>
<strong>Email</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'>". $email ."</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'><strong>Website</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'>". $website ."</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'><strong>LinkedIn Profile</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'>". $linkedInprofile ."</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'><strong>Article Title</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'>". $articletitle ."</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'><strong>Target Keywords</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'>". $TargetKeywords ."</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'><strong>Article Description</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'>". $ArticleDescription ."</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'><strong>Article Images</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'><a href='$ArticleimagesPath'>". $ArticleimagesPath ."</a></td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'><strong>Author Bio</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'>". $Authorbio ."</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'><strong>Headshot</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'>". $Headshot ."</td></tr>
<tr> <td style='border:1px solid #e8e8e8;padding:10px;color:#444;background:#f9f9f9'><strong>Published ContentPath</strong></td><td style='border:1px solid #e8e8e8;padding:10px 5px'><a href='$publishedcontentPath'>". $publishedcontentPath ."</a></td></tr>
<tr><td style='border:1px solid #e8e8e8;font-size:11px;text-align:center;padding:10px 10px'align=center colspan=2 valign=middle>Source Referring URL:<a href='https://www.fusionfirst.com' target=_blank> https://www.fusionfirst.com</a></td></tr></table> </div><p><b>SERVER VARIABLES (FOR TRACKING, PLEASE IGNORE):</b></p>" . "</p><p><b>User IP Address:</b> " . $ipaddress."</p>" ;
$note.=  '<table cellpadding="10">' ; 
$message.=  '</table>' ;
$mail = new PHPMailer(true);                          
$from = 'marketing@fusionfirst.com';
try {
    $mail->SMTPDebug = 0;                                
    $mail->isSMTP();                                     
    $mail->Host = "smtp.office365.com"; 
    $mail->SMTPAuth = true;                               
    $mail->Username = $from;                 
    $mail->Password = 'Mos30261';          
    $mail->SMTPSecure = 'tls';               
    $mail->Port = 587;                       
    //Recipients
    $mail->setFrom($from, "FBSPL");
    $mail->addAddress("marketing@fusionfirst.com"); 
    $mail->addCC($email,'Reply');            
    //Content
    $mail->isHTML(true);                     
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = $message;

    
    $mail->send();
        // try {
        //     if (!$mail->send()) {
        //         echo 'Message could not be sent.';
        //         echo 'Mailer Error: ' . $mail->ErrorInfo;
        //     } else {
        //         echo 'sent';
        //     }
        // }
//     catch (Exception $e) {
//         echo $e;
//  }
echo json_encode(array("Data"=>'sent'));
} catch (Exception $e) {
       echo $e;
}
}
?>