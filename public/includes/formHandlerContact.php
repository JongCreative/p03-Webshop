<?php

include '../../db_connection.php';

if (isset($_POST['submit'])) {
    $name       = $_post ['name'];    
    $subject    = $_post ['subject'];
    $mailForm   = $_post ['mail'];    
    $message    = $_post ['message'];    
    
    $mailTo     = "daisy.ci@gmail.com";
    $headers    =  "Form: ".mailForm; //who send the mail cc
    $txt        = "You have received an e-mail from ".name." . \n\n" . $message;

    mail($mailTo,$subject,$txt,$headers);
    //header("Location: index.php?");
}
