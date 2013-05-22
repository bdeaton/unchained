<?php
$agent = strtolower($_SERVER['HTTP_USER_AGENT']);
$device = "";
$browser = "";

/* device detection begin */
if(strstr($agent,'iphone')) { 
	$device = "iphone";
}
else if(strstr($agent,'windows')) { 
	$device = "windows";
}
else { 
	$device = "other";
}

if($device != "") {
	$deviceClass = "device-".$device;
}
/* device detection end */


/* browser detection begin */
if(strstr($agent,'iphone')) { 
	$browser = "iphone";
	$audioExt = "mp3";
}
else if(strstr($agent,'firefox')) { 
	$browser = "firefox";
	$audioExt = "ogg";
}
else if(strstr($agent,'chrome')) { 
	$browser = "chrome";
	$audioExt = "mp3";
}
else if(strstr($agent,'msie')) { 
	$browser = "msie";
	$audioExt = "mp3";
}
else if(strstr($agent,'opera')) { 
	$browser = "opera";
	$audioExt = "mp3";
}
else if(strstr($agent,'safari')) { 
	$browser = "safari";
	$audioExt = "mp3";
}
else { 
	$browser = "other";
	$audioExt = "mp3";
}
	
$browserClass = "browser-".$browser;
/* browser detection end */

$clientClasses = $deviceClass." ".$browserClass; 
$clientDataAttributes = "data-device-name=\"$device\" data-browser-name=\"$browser\"";
?>

