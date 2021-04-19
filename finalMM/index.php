<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: home.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>MentorMatch</title>
	<meta charset="utf-8">
	<link href="weavers.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<div id="wrapper" class="wrapper">
	<h1>MentorMatch</h1>

	<nav class="logNav">
		<ul>
			<li><a class="current" href="index.php">Login</a></li>
			<li><a href="create_an_account.php">Create an account</a></li>
		</ul> 
	</nav>

	<main>
		<div class="main">
			<br>
			<div class="login">
				<h3>Login</h3>
				<form class="loginForm" id="loginUser" action="" method="post">
					<table>
						<tr>
							<th><label class="email">Email:</label></th>
							<td><input class="email" id="name" name="username" type="text"></td>
						</tr>
						<tr>
							<th><label class="password">Password:</label></th>
							<td class="input"><input class="password" id="password" name="password" type="password"></td>
						</tr>
					</table>
					<input class="loginButton" name="submit" type="submit" value=" Login ">
					<span><?php echo $error; ?></span>
				</form>
			</div>
		</div>
	</main>
	<footer>
		<div id="contact">
			<span class="contact">MentorMatch</span>
			<br>Weavers LLC
			<br>300 E Lemon St.
			<br>Tempe, AZ 85287
			<br>
			<a id="mobile" href="tel:888-555-5555">888-555-5555</a><span id="desktop"></span>
		</div>
	</footer>
	</div>
	</body>
</html>