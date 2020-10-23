<?php


class NieuwsbriefController
{
    public function index()
    {
        require 'views/nieuwsbrief.view.php';
    }

    public function sendEmail()
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
}