<?php

require_once (dirname(__FILE__) . '/../dbconn/conn.php');

$count = db_query("INSERT INTO questions (question,answer) VALUES (:Question, :Answer)",
			array(':Question' => $_POST['new_question'], ':Answer' => $_POST['new_answer']));

header("Location: ./admin.php");