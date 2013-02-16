<?php
error_reporting(E_ALL ^ E_NOTICE);
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();

$pageTitle = "Timmy's Tools Admin Page";
include("../inc/greeting.php");
include("../dbconn/conn.php");
include("../inc/header_inc.php");
?> 
<?php if($_SESSION['id']){ ?>

  <div class='content'>
    <div class='container'>

      <?php foreach ($data as $key=>$value): ?>
        <div class='item'>
          <?php echo $value['question']; ?>
          <form action="delete.php" method="post">
            <input type="hidden" name="delete" value="<?php echo $value['id']; ?>" />
            <input type="submit" value="Delete" />
          </form>
          <form action="edit.php" method="post">
            <input type="hidden" name="edId" value="<?php echo $value['id']; ?>" />
            <input type="hidden" name="edQuest" value="<?php echo $value['question']; ?>" />
            <input type="hidden" name="edAns" value="<?php echo $value['answer']; ?>" />
            <input type="submit" value="Edit" />
          </form>
        </div>

        <div class='item-data'>
          <div>
            <?php echo $value['answer']; ?>
          </div>
        </div>

      <?php endforeach; ?>

    </div>
  </div>

?>





<?php }else{ ?>
  <div class='content'>
    <div class='container'>
      <h1>You have to be logged in to view this content!</h1>
    </div>
  </div>
<?php } ?>


<?php include("../inc/footer_inc.php"); ?>