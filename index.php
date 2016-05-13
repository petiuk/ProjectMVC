<?php
	define('APP', realpath(dirname(__FILE__).'/app'));

	include_once 'app/Bootstrap.php';
	$app = new Bootstrap();
	
	n9engine\Route::init();
?>