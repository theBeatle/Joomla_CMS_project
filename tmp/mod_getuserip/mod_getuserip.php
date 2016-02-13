<?php
	defined('_JEXEC') or die('Direct Access to this location is not allowed.');
	require_once dirname(__FILE__).'/helper.php';
	require JModuleHelper::getLayoutPath('mod_getuserip', $params->get('layout', 'default'));
?>