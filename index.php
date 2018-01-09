<?php

     require 'phpmailer/PHPMailerAutoload.php';
     $mail = new PHPMailer();
     $mail -> addAddress('aman76079@gmail.com','Aman Sinhg');
     $mail -> setFrom('amansingh13vit@gmail.com','Premika patil');
     $mail -> Subject = "Test Mail";
     $mail -> isHTML(true);
     $mail -> Body = "<p>This is our body </p>";
     if (!$mail ->send())
        echo "Something went wrong";
    else 
        echo "mail sent";




?>