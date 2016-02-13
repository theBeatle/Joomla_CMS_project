<?php
	defined('_JEXEC') or die('Direct Access to this location is not allowed.');

	$timeZone = $params->get('mytimezone');
	$showTime = $params->get('showtime');
	$showDate = $params->get('showdate');
	$showname = $params->get('showname');
	$showDay = $params->get('showday');



	require_once dirname(__FILE__).'/helper.php';
	require JModuleHelper::getLayoutPath('mod_datetime', $params->get('layout', 'default'));
?>