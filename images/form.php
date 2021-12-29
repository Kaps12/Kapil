<?php
    $name =$_POST['name'];
    $email =$_POST['email'];
    $subject =$_POST['subject'];
    $textbox =$_POST['textbox'];
    ?>


    <?php
    $message = "Informatin has been subited: $name \n
    Name : $name\n
    Email : $email\n
    Subject : $subject\n
    Message : $textbox\n
    From: $name ($email)\n
    ";
    $form = "From: $email\r\n";
    $subject = 'Enquiry';
    mail("kapilgarkoti.112852@gmail.com", $subject, $message, $form);
    //header('Location: index.html');
?>