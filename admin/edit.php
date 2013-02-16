<?php

error_reporting(E_ALL ^ E_NOTICE);
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();

$pageTitle = "Timmy's Tools - Edit FAQ";
include("../inc/greeting.php");
include("../dbconn/conn.php");
include("../inc/header_inc.php");

$edId = $_POST['edId'];
$edQuest = $_POST['edQuest'];
$edAns = $_POST['edAns'];

?>

<div class="content">
	<div class='container'>
		<form action="edit_func.php" method="post">
			<input type="hidden" name="edQuest" value="<?php echo $edQuest;  ?>" />
			<input type="hidden" name="edAns" value="<?php echo $edAns; ?>" />
			<input type="text" name="editedQuest" placeholder="<?php echo $edQuest; ?>" />
			<input type="text" name="editedAns" placeholder="<?php echo $edAns; ?>" />
			<input type="submit" value="submit" />
		</form>
 	</div>
</div>

<?php

include("../inc/footer_inc.php");

?>