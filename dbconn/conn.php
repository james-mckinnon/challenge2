<?php

require (dirname(__FILE__) . '/config.php');

try{
	$conn = new PDO('mysql::host=localhost;dbname=challenge2', $config['DB_USERNAME'], $config['DB_PASSWORD']);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
	echo "ERROR: " . $e->getMessage();
};

//ALL TEH DATAZ!!!
$query = "SELECT * FROM questions";
try{
	$stmt = $conn->prepare($query);
	$stmt->execute();
}catch(PDOException $e){
	echo "QUERY ERROR: " . $e->getMessage();
}
$data = $stmt->fetchAll(PDO::FETCH_ASSOC);

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