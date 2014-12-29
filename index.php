<?php
    include_once $_SERVER["DOCUMENT_ROOT"].'/assets/php/global_configuration.php';
	include_once $_SERVER["DOCUMENT_ROOT"].'/assets/php/global_functions.php';
	include_once $_SERVER["DOCUMENT_ROOT"].'/assets/php/session_management.php';
	include_once $_SERVER["DOCUMENT_ROOT"].'/assets/php/short_url_function.php';

	$sess = new Session_management();
	$config['session'] = $sess->sessionDetails();
	$func = new Genfunc();

	include_once $_SERVER["DOCUMENT_ROOT"].'/template/template_index.php';
?>
