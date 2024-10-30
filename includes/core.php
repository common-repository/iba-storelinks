<?php
function storelinks($atts, $content = null) {   
	extract(shortcode_atts(array(
		"amazon" => '',  
		"android" => '',  	
		"ipad" => '',  
		"iphone" => '',  
		"mac" => '',  
		"nook" => '',  
		"universal" => '',  
		"win8" => ''		
	), $atts)); 
		
	$output = ""; 
	if($amazon) { $output .= '<a href="'.$amazon.'"><img style="border-style: none;" alt="" src="'.JM_STORELINKS_URL.'assets/img/storeIconAmazon.png" width="45" height="45"  alt="Amazon App Store"/></a> '; }		
	if($android) { $output .= '<a href="'.$android.'"><img style="border-style: none;" alt="" src="'.JM_STORELINKS_URL.'assets/img/storeIconAndroid.png" width="45" height="45" alt="Google Play"/></a> '; } 
	if($ipad) { $output .= '<a href="'.$ipad.'"><img style="border-style: none;" alt="" src="'.JM_STORELINKS_URL.'assets/img/storeIconiPad.png" width="45" height="45" alt="Apple iPad"/></a> '; } 
	if($iphone) { $output .= '<a href="'.$iphone.'"><img style="border-style: none;" alt="" src="'.JM_STORELINKS_URL.'assets/img/storeIconiPhone.png" width="45" height="45" alt="Apple iPhone / iPod Touch"/></a> '; } 
	if($mac) { $output .= '<a href="'.$mac.'"><img style="border-style: none;" alt="" src="'.JM_STORELINKS_URL.'assets/img/storeIconMac.png" width="45" height="45" alt="Mac App Store"/></a> '; } 
	if($nook) { $output .= '<a href="'.$nook.'"><img style="border-style: none;" alt="" src="'.JM_STORELINKS_URL.'assets/img/storeIconnook.png" width="45" height="45" alt="NOOK Apps"/></a> '; } 
	if($universal) { $output .= '<a href="'.$universal.'"><img style="border-style: none;" alt="" src="'.JM_STORELINKS_URL.'assets/img/storeIconUniversal.png" width="45" height="45" alt="Apple Universal App"/></a> '; } 
	if($win8) { $output .= '<a href="'.$win8.'"><img style="border-style: none;" alt="" src="'.JM_STORELINKS_URL.'assets/img/storeIconWin8.png" width="45" height="45" alt="Windows 8 Store"/></a>'; } 
	
	return $output;
}

add_shortcode("storelinks", "storelinks");

?>