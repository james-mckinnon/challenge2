<?php

$pageTitle = "Timmy's Tools - Edit FAQ";
include_once (dirname(__FILE__) . '/../inc/header_inc.php');

$data = db_query("SELECT * FROM questions WHERE id = :id", array(':id' => $_GET['edId']))->fetch(PDO::FETCH_ASSOC);

?>

<div class="content">
	<div class='container'>
		<form action="edit_func.php" method="post">
			<input type="hidden" name="edQuest" value="<?php echo $data['question'];  ?>" />
			<input type="hidden" name="edAns" value="<?php echo $data['answer']; ?>" />
			<input type="text" name="editedQuest" placeholder="<?php echo $data['question']; ?>" /><br />
			<input type="text" name="editedAns" placeholder="<?php echo $data['answer']; ?>" /><br />
			<input type="submit" value="Submit" />
		</form>
 	</div>
</div>

<?php

include("../inc/footer_inc.php");

?>