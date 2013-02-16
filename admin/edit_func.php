<?php

require '../dbconn/conn.php';

$edQuest = $_POST['edQuest'];
$edAns = $_POST['edAns'];
$editedQuest = $_POST['editedQuest'];
$editedAns = $_POST['editedAns'];

$count = db_query("UPDATE questions SET question='$editedQuest', answer='$editedAns' WHERE question='$edQuest' AND answer='$edAns'");

?>