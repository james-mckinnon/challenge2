<?php

require_once (dirname(__FILE__) . '/../dbconn/conn.php');


$count = db_query("UPDATE questions SET question = :EditedQuest, answer = :EditedAns WHERE question = :QuestToEd AND answer = :AnsToEd",
			array(':EditedQuest' => $_POST['editedQuest'], ':EditedAns' => $_POST['editedAns'], ':QuestToEd' => $_POST['edQuest'], ':AnsToEd' => $_POST['edAns']));

header("Location: ./admin.php");
?>