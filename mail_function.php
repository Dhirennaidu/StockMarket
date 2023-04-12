<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\SMTP;
  use PHPMailer\PHPMailer\Exception;

  
function  sendOTP($email,$otp){

  require ('PHPMailer/src/Exception.php');
  require ('PHPMailer/src/PHPMailer.php');
  require ('PHPMailer/src/SMTP.php');
   // $message_body="Well Come to E_Stock Market Send  The Varification Code is:<br/><br/>";
    $mail = new PHPMailer(true);
   try{
    
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'podalram102@gmail.com';    // dhirennaidu17@gmail.com  // user@example.com             //SMTP username
    $mail->Password   = 'cuuaiavjtdpxrcyq';  //hnypgmmthwhlfbre                             //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('E_Stockmarket@gmail.com', 'E_Stock Market');  //'from@example.com', 'Mailer'
    $mail->addAddress($email);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Email Varification from the E_Stock Market";
    $mail->Body    = "This 4-digit Varification is:-<font size='8'color='orange'><h1 >$otp</h1></font><b></b>";
   

    $result=$mail->send();
    //echo '<center><p color="green">Message has been sent</p></center>';
    if(!$result){
      echo "Mailer Error:".$Email->ErrorInfo;
    }else{
      return $result;
    }
    return 1;
} catch (Exception $e) {
   // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    
}
 
}
?>