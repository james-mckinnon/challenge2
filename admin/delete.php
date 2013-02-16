<?php

require '../dbconn/conn.php';

$delVal = $_POST['delete'];

$count = db_query("DELETE FROM questions WHERE id = '$delVal'");

?>