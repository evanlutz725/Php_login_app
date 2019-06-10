<?php
	include_once 'header.php';
	if (!isset($_SESSION['u_uid'])){
		echo '<h1 class="align-middle">Welcome To The Simple Login App!</h1>';
		echo '<h1 class="align-middle">Please login or sign up. Logging in will allow you to view your personal catch-phrase!</h1>';
	} else {
		echo '<h1 class="align-middle">Congratulations! You Are Logged Into To The Simple Login App!</h1>';
		echo '<h1 class="align-middle">Welcome, '.$_SESSION['u_first'].' '.$_SESSION['u_last'].'. You are user number '.$_SESSION['u_id'].'.';
		echo '<h1 class="align-middle">Your Catch-Phrase is:</h1>';
		echo '<h1 class="align-middle">'.$_SESSION['u_phrase'].'</h1>';

	}
	include_once 'footer.php';
