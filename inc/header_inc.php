<?php
include (dirname(__FILE__) . '/login.php');
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Timmy's Tools FAQ Page</title>
	<link type="text/css" rel="stylesheet" href="/challenge2/css/normalize.css">
	<link type="text/css" rel="stylesheet" href="/challenge2/css/main.css">
	<link type="text/css" rel="stylesheet" href="/challenge2/css/slide.css">
	<script type="text/javascript" src="/challenge2/js/jquery.js"></script>
	<script type="text/javascript" src="/challenge2/js/slide.js"></script>
</head>

<body>

	<!-- PANEL -->
	<div id="toppanel">
		<div id="panel">
			<div class="content clearfix">
				<div class="left">
					<h1>Timmy's Tools Login Panel</h1>
					<p class="grey">Please enter your login information into the boxes on the right</p>
				</div>

				<?php if(!$_SESSION['id']): ?>

				<div class="left">
					<!-- LOGIN FORM -->
					<form class="clearfix" action="" method="post">
						<h1>Member Login</h1>

						<?php
						if($_SESSION['msg']['login-err']){
							echo '<div class="err">' . $_SESSION['msg']['login-err'] . '</div>';
							unset($_SESSION['msg']['login-err']);
						}
						?>

						<label class="grey" for="username">Username:</label>
						<input class="field" type="text" name="username" id="username" value="" size="23" />
						<label class="grey" for="password">Password:</label>
						<input class="field" type="password" name="password" id="password" size="23" />
						<label><input name="rememberMe" id="rememberMe" type="checkbox" checked="checked" value="1" /> &nbsp;Remember Me</label>
						<div class="clear"></div>
						<input type="submit" name="submit" value="Login" class="bt_login" />
					</form>
				</div>

				<div class="left right"></div>

			<?php else: ?>

			<div class="left">
				<h1>Administrator Panel</h1>
				<a href="/challenge2/admin/admin.php">Go to the Admin Page</a>
				<p>- or -</p>
				<a href="?logoff">Logout</a>
			</div>

			<div class="left right"></div>

			<?php endif; ?>
			
			</div>
		</div>
		<!--END OF LOGIN-->

		<!--TAB-->
		<div class="tab">
			<ul class="login">
				<li class="left">&nbsp;</li>
				<li>Hello <?php echo $_SESSION['usr'] ? $_SESSION['usr'] : 'Guest';?>!</li>
				<li class="sep">|</li>
				<li id="toggle">
					<a id="open" class="open" href="#"><?php echo $_SESSION['id']?'Open Panel':'Log In'; ?></a>
					<a id="close" style="display: none;" class="close" href="#">Close Panel</a>
				</li>
				<li class="right">&nbsp;</li>
			</ul>
		</div>
		<!--END OF TAB-->
	
	<?php 
	if (isset($_SESSION['usr'])){ 
		$greeting = ' ' . trim($_SESSION['usr']); 
	}else{
		$greeting = '';
	} 
	?>

	</div>
	<!--END OF PANEL-->

	<div class="header">
		<h1><?php echo $pageTitle; ?></h1>
	</div>
	<div class="nav">
		<p id="greeting">Good <?php echo greeting() . $greeting; ?>, The date today is <?php echo date('l jS \of F Y'); ?>
	</div>