<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';



if(isset($_POST['Submit']))
{
$name = $_POST['Name'];
$phonenumber = $_POST['Number'];
$email = $_POST['Email'];
$msg = $_POST['Message'];
        
               
  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'vishalsathwara999@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'Vishal@2801999'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('vishalsathwara999@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('vishalsathwara999@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Vishal Web Info';
    $mail->Body = "<h3>Name : $name <br>E-mail: $email <br>Phone Number: $phonenumber <br>Message : $msg </h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
    
                        
    
}

?>
