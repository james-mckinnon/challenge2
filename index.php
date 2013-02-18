<?php
$pageTitle = "FAQ Home Page";
include("inc/header_inc.php");
?>

<div class="content">
	<div class='container'>

		<?php $data = db_query("SELECT * FROM questions")->fetchAll(PDO::FETCH_ASSOC); ?>

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
