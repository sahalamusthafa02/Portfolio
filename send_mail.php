<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $to = "tksahla02@gmail.com"; // replace with your email
    $subject = $_POST['subject'];
    $message = "Name: ".$_POST['name']."\n";
    $message .= "Email: ".$_POST['email']."\n";
    $message .= "Mobile: ".$_POST['mobile']."\n";
    $message .= "Message: ".$_POST['message'];

    $headers = "From: ".$_POST['email'];

    if(mail($to, $subject, $message, $headers)){
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
