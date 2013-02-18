<?php

error_reporting(E_ALL ^ E_NOTICE);
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();

require '../dbconn/conn.php';

db_query("DELETE FROM questions WHERE id = :value", array(':value' => $_POST['delete']));

header("Location: ./admin.php");
