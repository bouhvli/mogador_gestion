<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['textarea'];

    $mailTO = "hamza_bouhali@protonmail.com";
    $headers = "Forom: ".$visitor_email;
    $txt = "you have received an e-mail from ".$name.".\n\n".$message;

    
    mail($mailTO,$txt,$headers);
    header("location: generic.html?mailsend");
    ?>