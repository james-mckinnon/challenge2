<?php

$pageTitle = "Timmy's Tools - Edit FAQ";
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
			<input type="text" name="editedQuest" placeholder="<?php echo $edQuest; ?>" /><br />
			<input type="text" name="editedAns" placeholder="<?php echo $edAns; ?>" /><br />
			<input type="submit" value="Submit" />
		</form>
 	</div>
</div>

<?php

include("../inc/footer_inc.php");

?>