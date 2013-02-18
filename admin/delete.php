<?php

require_once (dirname(__FILE__) . '/../dbconn/conn.php');

db_query("DELETE FROM questions WHERE id = :value", array(':value' => $_POST['delete']));

header("Location: ./admin.php");
