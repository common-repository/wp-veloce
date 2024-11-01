<?php
/*
Plugin Name: WordPress Veloce
Plugin URI: https://www.salvatoredp.it/wordpress-veloce
Description: No setup plugin to speeding up your wordpress website. 
Author: Salvatore Della Pepa
Author URI: https://www.salvatoredp.it/
Version: 1.0.1  
*/

include_once('func.php');

/*
** Attiva plugin
**/
function velocewp_activate() {
global $velocewp;
global $iniziohtaccess;
global $stringagzip;
global $stringacachefile1;
global $stringacachefile2;
global $stringakeepalive;
global $stringautf8;
global $stringa_finale;

	if (file_exists($velocewp)) {
		$sh = fopen($velocewp, 'r');
		$accesso = fread($sh, filesize($velocewp));
		fclose($sh);
  	}
	$sh = fopen($velocewp, 'w') or die("can't open file");
	fwrite($sh, $accesso.$iniziohtaccess);
	fwrite($sh, $stringagzip);
	fwrite($sh, $stringacachefile1);
	fwrite($sh, $stringacachefile2);
	fwrite($sh, $stringakeepalive);
	fwrite($sh, $stringautf8);
	fwrite($sh, $stringa_finale);
	fclose($sh);
}
register_activation_hook( __FILE__, 'velocewp_activate' );

/*
** Disattiva plugin
**/
function velocewp_deactivate() {
	global $velocewp;
	global $iniziohtaccess;
	global $stringagzip;
	global $stringacachefile1;
	global $stringacachefile2;
	global $stringakeepalive;
	global $stringautf8;
	global $stringa_finale;

	if (file_exists($velocewp)) {
		$sh = fopen($velocewp, 'r');
		$accesso = fread($sh, filesize($velocewp));
		fclose($sh);
		$accesso = str_replace($iniziohtaccess, "", $accesso);
		$accesso = str_replace($stringagzip, "",$accesso);
		$accesso = str_replace($stringacachefile1, "",$accesso);
		$accesso = str_replace($stringacachefile2, "",$accesso);
		$accesso = str_replace($stringakeepalive, "",$accesso);
		$accesso = str_replace($stringautf8, "",$accesso);
		$accesso = str_replace($stringa_finale, "",$accesso);
		$sh = fopen($velocewp, 'w') or die("can't open file");
		fwrite($sh, $accesso);
		fclose($sh);
	}
} 
register_deactivation_hook( __FILE__, 'velocewp_deactivate' );

?>