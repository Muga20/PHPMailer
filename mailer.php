<?php

ini_set('display_errors', 1); 
ini_set('display_startup_errors', 1); 
error_reporting(E_ALL);


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\SMTP;
use \PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer/src/PHPMailer.php';  
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

if(isset($_POST['send'])){
    

    $mail = new PHPMailer(true); // Passing `true` enables exceptions
    $mail->isSMTP(); // Set mailer to use SMTP


    $mail->Host = 'smtp.gmail.com'; //host
    $mail->SMTPAuth = true; //authentication
    $mail->Username = 'your email'; //email
    $mail->Password = 'password '; //password

    
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;

    
    $mail->setFrom("your email"); //from email

    $mail->addAddress("your email"); //to email

    //$mail->addCC('');
    //$mail->addBCC('');
    
    $mail->isHTML(true); //set email format to HTML


    $mail->Subject = $_POST['subject'];

    $mail->Body = '<html> <body> <h3>From ' . $_POST['email'] . '</h3>  <br/> <h4>Name <b>'. $_POST['name'] . '</h4> </b> <br/>  <p> <h4> Message </h4>  '. $_POST['message'] . '</p> </body> </html>';


    if($mail->send()){
        echo 'Message has been sent'; //success message
        header('Location: /email/contact.php');
    }else{
        echo 'Message could not be sent.';  //error message
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }

}
?>

