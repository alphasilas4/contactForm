


<?php
// composer require "swiftmailer/swiftmailer:^6.0"

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$body = $_POST['message'];

require_once 'vendor/autoload.php';


// defining values of my email and it password so that it can be called any where for security reasons
// and can be included from whereever it was defined
define('EMAIL', 'yourmail@gmail.com');
// define('AppPASSWORD', 'vsagwijivrhgrqfn');
define('AppPASSWORD', 'password');
// define('AppPASSWORD', 'whatisyourname');




// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
// $transport = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465)587


// enter your email address and the password you have or generated
  ->setUsername(EMAIL)
  ->setPassword(AppPASSWORD);

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// function sendEmail($useremail, $token){
    // global $mailer;
  

// Create a message
$message = (new Swift_Message($subject))
  ->setFrom($email)
  ->setTo(EMAIL)
  ->setBody($body);
  

// Send the message
$result = $mailer->send($message);

// echo "teser";

// }
 ?>
 <script>
    alert("Sent Successfully");
    window.location.replace("index.php");

 </script>

 