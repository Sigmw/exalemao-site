<?php
@require 'environment.php';

if (MANUTENCAO) {
	require 'maintenance.html';
	exit;
} else {
	$config = array();
	if(ENVIRONMENT == 'development') {
		@define("BASE", "http://192.168.18.17/");
		$config['dbname'] = 'exalhb';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'root';
		$config['dbpass'] = '';
	} else {
			@define("BASE", "http://usahb.net/");
		$config['dbname'] = 'u510030074_alemao';
		$config['host'] = 'localhost';
		$config['dbuser'] = 'u510030074_root';
		$config['dbpass'] = '0>YmtP6ckyX';
	}

	global $db;
	try {
		$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
	} catch(PDOException $e) {
		echo "ERRO: ".$e->getMessage();
		exit;
	}

}