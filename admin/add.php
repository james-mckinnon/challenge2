<?php
error_reporting(E_ALL ^ E_NOTICE);
session_name('tzLogin');
session_set_cookie_params(2*7*24*60*60);
session_start();

$pageTitle = "Timmy's Tools - Add FAQ";
include("../inc/greeting.php");
include("../dbconn/conn.php");
include("../inc/header_inc.php");
?> 
<?php if($_SESSION['id']){ ?>

  <div class='content'>
    <div class='container'>

      <form action="add_func.php" method="post">
        <label for="new_question">Question:</label>
        <input type="text" name="new_question" id="new_question" />
        <br /><br />
        <label for="new_answer">Answer:</label>
        <input type="text" name="new_answer" id="new_answer" />
        <br />
        <input type="submit" name="submit" value="Submit" />
      </form>

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