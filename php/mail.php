<?php
if(isset(['submit'])) {
    $firstName = $_POST['firstNAme'];
    $firstName = $_POST['lastName'];
    $fromEmail = $_POST['email'];
    // etc


    // receipient email
    $mailTo = '';

    $subject = '.........etc' .$firstNAme;


    $htmlContent = '<h2> Email Request Received </h2>
    <p>Client NAme: </b>' .$firstName . " " . $lastName . '</p>'
    '<p><b> Email</b>' .$firstName . " " . $lastName . '</p>'
    // etc

    $headers = "From: " .$firstNAme . "<". $fromEmail . ">";
    $headers .= "MIME-Version: 1.0!"
}


?>