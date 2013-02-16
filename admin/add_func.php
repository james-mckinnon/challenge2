<?php

require '../dbconn/conn.php';

$newQuest = $_POST['new_question'];
$newAns = $_POST['new_answer'];

$count = db_query("INSERT INTO questions (question,answer) VALUES ('$newQuest','$newAns')");

?>