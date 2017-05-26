<?php 
	// Sesiion start
	session_start();
	//Assets publics
	$base_url = 'http://localhost/pdo/';
	$assets_css = $base_url.'public/css/';
	$assets_js = $base_url.'public/js/';
	$assets_imgs = $base_url.'public/imgs/';
	//Date base
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$ndb  = 'adsi1132816';
	$conx = null;
	$stm  = null;