<?php
	session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="icon" href="https://freepngimg.com/download/php/2-2-php-logo-png.png">

    <title>php_app</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light container-fluid">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="btn btn-outline-success nav-btn" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="btn btn-outline-success nav-btn" href="login.php">Login</a>
      </li>
	  <li class="nav-item">
        <a class="btn btn-outline-success nav-btn" href="signup.php">Sign Up</a>
      </li>
    </ul>
  </div>
</nav>
 <!-------------------------------------------------------------------------------------------------------------------
	<nav class="navbar navbar-light bg-light navbar-expand-lg container-fluid">
	  <a class="navbar-brand" href="index.php">Simple Login App</a>
	   <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	  <div class="row">
		  	<?php
			/*if (!isset($_SESSION['u_id'])) {
				echo '<a class="btn btn-outline-success nav-btn" href="index.php">Home</a>';
				echo '<a class="btn btn-outline-success nav-btn" href="login.php">Login</a>';
				echo '<a class="btn btn-outline-success nav-btn" href="signup.php">Sign Up</a>';
			} else {
				echo '<form action="includes/logout.inc.php" method="POST"><button class="btn btn-outline-success nav-btn" type="submit" name="submit">Logout</button></form>';
			}*/
			?>
			
		</div>
	</nav>
	-------------------------------------------------------------------------------------------------------------------->
	<div class="jumbotron container">
	