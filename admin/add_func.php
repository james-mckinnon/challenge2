<?php

error_reporting(E_ALL ^ E_NOTICE);
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();

require_once (dirname(__FILE__) . '/../dbconn/conn.php');

$count = db_query("INSERT INTO questions (question,answer) VALUES (:Question, :Answer)",
			array(':Question' => $_POST['new_question'], ':Answer' => $_POST['new_answer']));

header("Location: ./admin.php");