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
        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
        die();
    }
}