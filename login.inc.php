<?php

session_start();

if (isset($_POST['submit'])) {
	
	include 'dbh.inc.php';
	
	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	
	//error handlers
	//check if inputs are empty
	
	if (empty($uid) || empty($pwd)) {
		header("Location: ../login.php?login=login-empty");
		exit();
	} else {
		$sql = "SELECT * FROM users WHERE user_uid = '$uid'";
		$result = mysqli_query($conn, $sql);
		$resultCheck = mysqli_num_rows($result);
		if ($resultCheck < 1) {
			header("Location: ../login.php?login=login-error&uid=$uid");
			exit();
		} else {
			if ($row = mysqli_fetch_assoc($result)){
				$hashedPwd = md5($pwd);
				if ($hashedPwd != $row['user_pwd']) {
					header("Location: ../login.php?login=login-error&uid=$uid");
					exit();
				} else {
					//login the user
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_uid'] = $row['user_uid'];
					$_SESSION['u_phrase'] = $row['user_phrase'];
					header("Location: ../index.php?login=success");
					exit();
					}
				}
			}
		}
} else {
		header("Location: ../login.php");
		exit();
	}
	