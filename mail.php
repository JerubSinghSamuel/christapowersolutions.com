<?php
$name = $_POST['inputName'];
$email = $_POST['inputEmail'];
$number = $_POST['inputNumber'];
$subject = $_POST['inputSubject'];
$query = $_POST['inputQuery'];
$formcontent=" From: $name \n Email: $email \n Mobile: $number \n Query: $query";
$recipient = "info@christapowersolutions.com";
$mailheader = "From: $email \r\n";
$success = mail($recipient, $subject, $formcontent, $mailheader);
if (!$success){
  echo "There was some error sending your query. If this problem persists, please try again within next 24 hours.";
}
else {
  header("Location: index.html");
}
?>
