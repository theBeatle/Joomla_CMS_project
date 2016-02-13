<?php
	defined( '_JEXEC' ) or die;


	$verx  =    $params->get('mytimezone');
	date_default_timezone_set($verx);
	$dmx =  date_default_timezone_get() . ' => ' . date(' | d/m/Y  | h:i (a) | l'); 

	$exmm = explode("|",$dmx);
	return $exmm;
?>

