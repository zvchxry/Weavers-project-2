<?php
include('session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>MentorMatch</title>
	<meta charset="utf-8">
	<link href="weavers.css"
		rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--[if lt IE 9]> 
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"> </script> <![endif]-->
</head>

<body>
	<div id="wrapper" class="wrapper">
		<div id="header">
			<h1>MentorMatch</h1>
		</div>
		
		<nav class="nav">
			<ul>
				<li><a class="current" href="home.php">Home</a></li>
				<li><a href="account1.php">Account</a></li>
				<li><a href="groups.php">Groups</a></li>
				<li><a href="mentors.php">Mentors</a></li>
				<p id="welcome">Welcome  <i><?php echo $login_session; ?></i></p>
				<img src="" id="picture">
				<li><button id="logoff" type="button" onclick="window.location.href = 'logout.php';">Log Off</button></li>
			</ul>
		</nav>

		<main>
			<div class="main">
				<h2>Welcome to MentorMatch</h2>
					<img src="students_working.jpg" class="students_working" alt="Students working" style="float:center" width="400px" height="300px">
					<h5>A place where faculty and students can enrich each others lives through mentorship</h5>
					<br>
					<br>
					<div class="menteeInfo">
						<h3>Students</h3>
						<hr>
						<ul>
							<li>Benefits to using our product 1</li>
							<li>Some statistic 2</li>
							<li>Content 3</li>
							<li>Benefits to using our product 4</li>
						</ul>
						<p></p>
					</div>
					<div class="mentorInfo">
						<h3>Mentors</h3>
						<hr>
						<ul>
							<li>Benefits to using our product 1</li>
							<li>Some statistic 2</li>
							<li>Content 3</li>
							<li>Benefits to using our product 4</li>
						</ul>
						<p></p>
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

	<script type="text/javascript">

		window.onload = function(){
			var avatar = document.getElementById("picture");
			avatar.setAttribute("src", localStorage.getItem("profilePicture"));
			avatar.setAttribute("width", "70vw");
			avatar.setAttribute("height", "70vh");
		}

	</script>
	</body>
</html>