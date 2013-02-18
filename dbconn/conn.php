<?php

error_reporting(E_ALL ^ E_NOTICE);
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();

require_once (dirname(__FILE__) . '/config.php');

try{
	$conn = new PDO("mysql::host=" . $config['HOST'] . ";localhost;dbname=" . $config['DB_NAME'], $config['DB_USERNAME'], $config['DB_PASSWORD']);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "ERROR: " . $e->getMessage();
};

function db_query($sql, $params=array()){
	
	global $conn;

	try{
		$stmt = $conn->prepare($sql);
		$stmt->execute($params);
		return $stmt;
	}catch(PDOException $e){
		echo "QUERY ERROR: " . $e->getMessage();
	}
}