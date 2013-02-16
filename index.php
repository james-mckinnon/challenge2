<?php
$pageTitle = "Timmy's Tools FAQ Page";
$pageName = "index";
include("inc/greeting.php");
include("dbconn/conn.php");
include("inc/header_inc.php");
?>

<div class="content">
	<div class='container'>

		<?php foreach ($data as $key=>$value): ?>
			<div class='item'>
				<?php echo $value['question']; ?>
			</div>
			<div class='item-data'>
		    	<div>
		        	<?php echo $value['answer']; ?>
		    	</div>
			</div>
		<?php endforeach; ?>

 	</div>
</div>

<?php include("inc/footer_inc.php"); ?>