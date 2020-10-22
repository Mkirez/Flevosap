<?php
/**
 * Created by: Stephan Hoeksema 2020
 * WFFlix-start
 */

class ContactController
{
    public function index()
    {
        require 'views/contact.view.php';
    }

    public function contact(){
        if (isset($_POST['email']) && $_POST['email'] != ''){
            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
                echo "yes";
                $name = $_POST['name'];
                $subject = $_POST['subject'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $message = $_POST['message'];
        
                $to = "totixoc671@ptcji.com";
                $body = "";
        
                $body .= "From: ".$name. "\r\n";
                $body .= "Email: ".$email. "\r\n";
                $body .= "Phone: ".$phone. "\r\n";
                $body .= "Message: ".$message. "\r\n";
                mail($to, $subject, $message);
            } 
        }
        require 'views/contact.view.php';
    }
}