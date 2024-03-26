y<?php
header('Access-Control-Allow-Origin: *'); 
 $email = $_POST['email'];
 $fullname = $_POST['fullname'];
 $phoneno= $_POST['phoneno'];
 //echo $_SERVER['HTTP_USER_AGENT'] . "\n\n";
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
//$browser = get_browser(null, true);
$subject = "NewLead-RPO: " . $fullname . " (" . $phoneno.") ON ".date("Y-m-d");
$message = "<p><b>Email:</b> " . $email . "</p><p><b>Full Name:</b> " . $fullname . "</p><p><b>Phone No:</b> " . $phoneno."</p><p><b>SERVER VARIABLES (FOR TRACKING, PLEASE IGNORE):</b></p>" . "</p><p><b>User IP Address:</b> " . $ipaddress."</p>" ;
$message.=  '<table cellpadding="10">' ; 
foreach($_SERVER as $paramName => $varServer) {
    if (isset($_SERVER[$paramName])) { 
       
        $message.=  '<tr><td>'.$paramName.'</td><td>'.$_SERVER[$paramName].'</td></tr>' ; 
    } 
    else { 
        $message.=  '<tr><td>'.$paramName.'</td><td>-</td></tr>' ; 
    } 
} 
$message.=  '</table>' ;
require 'class.phpmailer.php';
$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.office365.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'info@fusionfirst.com';                 // SMTP username ashish.dwivedi@fusionoutsourcing.com
    $mail->Password = 'fusion@2018';                           // SMTP password mypass123
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('info@fusionfirst.com', 'RPO');
    //$mail->addAddress('devsb3@fusionfirst.com', 'Ojal');     // Add a recipient
    $mail->addAddress('lavesh.chhipa@fusionfirst.com');               // Name is optional
    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = $message;

     $mail->send();
   echo json_encode(array("abc"=>'sent'));
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
?>
