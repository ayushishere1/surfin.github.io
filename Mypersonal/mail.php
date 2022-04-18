<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message= $_POST['message'];

$email_header = "From:" .$name."<".$email.">\r\n";
$reciepient = "hellomynameisayushandhereiam@gmail.com";
mail($reciepient,$message,$email_header)
or die("Error!");
echo "Message Sent";

?>