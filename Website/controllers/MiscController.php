<?php


class MiscController
{
    public function veelgesteldevragen()
    {
        require 'views/veelgesteldeVragen.view.php';
    }
    public function onzepartner()
    {
        require 'views/onzepartners.view.php';
    }
    public function nieuwsbrief()
    {
        require 'views/nieuwsbrief.view.php';
    }
    public function nieuwsbrief_send()
    {
        if (isset($_POST['email']) && $_POST['email'] != '') {

            if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $name = $_POST['naam'];
                $subject = $_POST['onderwerp'];
                $email = $_POST['email'];
                $message = $_POST['bericht'];

                $to = "robiwaf316@justlibre.com";
                $body = "";

                $body .= "From: " . $name . "\r\n";
                $body .= "Email: " . $email . "\r\n";
                $body .= "Message: " . $message . "\r\n";
                mail($to, $subject, $message);
            }
        }
        require 'views/nieuwsbrief.view.php';
    }


    public function contact()
    {
        require 'views/contact.view.php';
    }

    public function contact_send(){
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