<?php
$pageTitle = "Admin Page";
$page = "admin";
include_once (dirname(__FILE__) . '/../inc/header_inc.php');
?> 
<?php if($_SESSION['id']){ ?>

  <div class='content'>
    <div class='container'>
      <?php $data = db_query("SELECT * FROM questions")->fetchAll(PDO::FETCH_ASSOC); ?>

      <?php foreach ($data as $key=>$value): ?>
        <div class='item'>
          <table border="0" align="center">
            <tr>
              <td><?php echo $value['question']; ?></td>
              <td><form action="delete.php" method="post">
                    <input type="hidden" name="delete" value="<?php echo $value['id']; ?>" />
                    <input type="submit" value="Del" />
                  </form>
              </td>
              <td><form action="edit.php" method="get">
                    <input type="hidden" name="edId" value="<?php echo $value['id']; ?>" />
                    <input type="submit" value="Edit" />
                  </form>
              </td>
            </tr>
          </table>

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