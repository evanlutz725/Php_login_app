<?php
	include_once 'header.php';
	if (isset($_GET['signup'])) {
		if ($_GET['signup'] == 'success') {
			$uid = $_GET['uid'];
			header ("Location: login.php?uid=$uid");
		}
	}

?>
		<h1>Signup Page</h1>
		<form method="POST" class="signup-form col-md-4 offset-md-4 col-sm-8 offset-sm-2" action="includes/signup.inc.php">
			<div class="form-group">
				<?php
				if (isset($_GET['first'])){
				$first = $_GET['first'];
				echo '<input class="form-control" type="text" name="first" value="'.$first.'" placeholder="First Name">';
				} else {
				echo '<input class="form-control" type="text" name="first" placeholder="First Name">';
				}
				?>
				<?php
				if (isset($_GET['last'])){
				$last = $_GET['last'];
				echo '<input class="form-control" type="text" name="last" value="'.$last.'" placeholder="Last Name">';
				} else {
				echo '<input class="form-control" type="text" name="last" placeholder="Last Name">';
				}
				?>
				<?php
				if (isset($_GET['email'])){
				$email = $_GET['email'];
				echo '<input class="form-control" type="text" name="email" value="'.$email.'" placeholder="E-Mail">';
				} else {
				echo '<input class="form-control" type="text" name="email" placeholder="E-Mail">';
				}
				?>
				<?php
				if (isset($_GET['uid'])){
				$uid = $_GET['uid'];
				echo '<input class="form-control" type="text" name="uid" value="'.$uid.'" placeholder="Username/E-Mail">';
				} else {
				echo '<input class="form-control" type="text" name="uid" placeholder="Username/E-Mail">';
				}
				?>			
				<input class="form-control" type="password" name="pwd" placeholder="Password">
				<input class="form-control" type="password" name="pwd_confirm" placeholder="Confirm Password">
				<?php
				if (isset($_GET['phrase'])){
				$phrase = $_GET['phrase'];
				echo '<input class="form-control" type="text" name="phrase" value="'.$phrase.'" placeholder="Catch-Phrase">';
				} else {
				echo '<input class="form-control" type="text" name="phrase" placeholder="Catch Phrase">';
				}
				?>
				<button class="form-control btn-success submit-btn" type="submit" name="submit" style="margin-top:5px">Signup!</button>
				<?php
				if (isset($_GET['signup'])){
					if ($_GET['signup'] != 'success'){
					echo '<button class="form-control btn-danger submit-btn" type="submit" name="clear" style="margin-top:20px">Clear Form</button>';
					}
				}
				?>
			</div>
		</form>
		<?php
		if (!isset($_GET['signup'])) {
			exit();
		} else {
			$signupCheck = $_GET['signup'];
			if ($signupCheck == 'empty_error'){
				echo '<script>alert("Please enter a value into each field.")</script>';
			} elseif ($signupCheck == 'name_error'){
				echo '<script>alert("Please enter a valid name.")</script>';
			} elseif ($signupCheck == 'email_error'){
				echo '<script>alert("Please enter a valid email.")</script>';
			} elseif ($signupCheck == 'user_taken_error'){
				echo '<script>alert("Username has already been taken. Please select another username and try again.")</script>';
			} elseif ($signupCheck == 'password_match_error'){
				echo '<script>alert("Your password was not reentered correctly. Please try again.")</script>';
			}
		}
		?>
<?php 
	include_once 'footer.php';
?>