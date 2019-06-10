<?php
	include_once 'header.php';
?>
		<h1>Login Page</h1>
		<form method="POST" class="signup-form col-md-4 offset-md-4 col-sm-8 offset-sm-2" action="includes/login.inc.php">
			<div class="form-group">
				<?php
				if (isset($_GET['login'])) {
					if ($_GET['login'] == 'login-empty') {
						echo '<script>alert("Please enter a value into each field.")</script>';
						echo '<input class="form-control mr-sm-2" type="text" name="uid" placeholder="Username/e-mail">';
					} elseif ($_GET['login'] == 'login-error') {
						$uid = $_GET['uid'];
						echo '<script>alert("You\'ve enterd an incorrect username or password! Please try again.")</script>';
						echo '<input class="form-control mr-sm-2" type="text" name="uid" value="'.$uid.'"placeholder="Username/e-mail">';
					}
				} elseif (isset($_GET['uid'])) {
					$uid = $_GET['uid'];
					echo '<script>alert("You\'ve successfully signed up! Please login to view your content.")</script>';
					echo '<input class="form-control mr-sm-2" type="text" name="uid" value="'.$uid.'"placeholder="Username/e-mail">';
				} else {
					echo '<input class="form-control mr-sm-2" type="text" name="uid" placeholder="Username/e-mail">';
				}
				?>
				<input class="form-control mr-sm-2" type="password" name="pwd" placeholder="Password">
				<button class="form-control btn-success submit-btn" type="submit" name="submit" style="margin-top:5px">Login</button>
			</div>
	    </form>
<?php
	include_once 'footer.php';
?>