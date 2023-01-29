
<?php

$name = $_POST['name'];
$email = $_POST['name'];
$message = $_POST['message'];

$$mailheader = "From:" .$name."<".$email.">\r\n";

$recipient = "joshua.lavallais@yahoo.com";

mail($recipient, $message, $mailheader);

or die("Error!");

echo"message send";

?>