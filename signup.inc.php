<?php
if (isset($_POST["clear"])) {
	header("Location: ../signup.php");
	exit();
}

if (isset($_POST["submit"])) {
	
	include_once 'dbh.inc.php';
	
	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$pwd_confirm = mysqli_real_escape_string($conn, $_POST['pwd_confirm']);
	$phrase = mysqli_real_escape_string($conn, $_POST['phrase']);
	
	
	//error handlers
	//check for empty fields
	
	if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd) || empty($pwd_confirm) || empty($phrase)){
		header("Location: ../signup.php?signup=empty_error&first=$first&last=$last&email=$email&uid=$uid&phrase=$phrase");
		exit();
	} else {
		//check if input characters are valid
		if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)){
			header("Location: ../signup.php?signup=name_error&first=$first&last=$last&email=$email&uid=$uid&phrase=$phrase");
			exit();
		} else {
			//check for valid email
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../signup.php?signup=email_error&first=$first&last=$last&email=$email&uid=$uid&phrase=$phrase");
				exit();
			} else {
				$sql = "SELECT * FROM `users` WHERE user_uid = '$uid'";
				$result = mysqli_query($conn, $sql);
				$result_check = mysqli_num_rows($result);
				
				if ($result_check > 0) {
					header("Location: ../signup.php?signup=user_taken_error&first=$first&last=$last&email=$email&uid=$uid&phrase=$phrase");
					exit();
				} else {
					if ($pwd != $pwd_confirm) {
						header("Location: ../signup.php?signup=password_match_error&first=$first&last=$last&email=$email&uid=$uid&phrase=$phrase");
						exit();
					} else {
						//hashing the password to send to database
						$hashedPwd = md5($pwd);
						//insert user into database
						$sql = "INSERT INTO users (user_first, user_last, user_email, user_phrase, user_uid, user_pwd) VALUES ('$first', '$last', '$email', '$phrase', '$uid', '$hashedPwd');";
						//this actually runs the query
						mysqli_query($conn, $sql);
						header("Location: ../signup.php?signup=success&uid=$uid");
						exit();
					}
				}
			}
		}
	}
	
} else {
	header("Location: ../signup.php");
	exit();
}