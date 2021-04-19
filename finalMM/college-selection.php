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
				<li><a href="home.php">Home</a></li>
				<li><a href="account1.php">Account</a></li>
				<li><a class="current" href="groups.php">Groups</a></li>
				<li><a href="mentors.php">Mentors</a></li>
				<p id="welcome">Welcome  <i><?php echo $login_session; ?></i></p>
				<img src="" id="picture">
				<li><button id="logoff" type="button" onclick="window.location.href = 'logout.php';">Log Off</button></li>
			</ul> 
		</nav>

		<main>
			<div id="email">
				<?php
				$host="107.180.1.16";
				$port=3306;
				$socket="";
				$user="weavers";
				$password="!!Weavers";
				$dbname="weavers";

			// $loggedInUserSubject = $_SESSION['subject'];

			echo "<h4>Select your college below:</h4>";

			echo "<div id='high-school'>";
				echo "<img src='asu.jpg' height='250' width='400' style='margin-left: 1.5vw;'></img>";
				echo "<h4><a href='asu.php'>Arizona State University</a></h4>";
			echo "</div>";

			echo "<div id='high-school'>";
				echo "<img src='usc.jfif' height='250' width='400' style='margin-left: 1.5vw;'></img>";
				echo "<h4><a href='usc.php'>University of Southern California</a></h4>";
            echo "</div>";
            
            echo "<div id='high-school'>";
				echo "<img src='wildcats.jpg' height='250' width='400' style='margin-left: 1.5vw;'></img>";
				echo "<h4><a href='ua.php'>University of Arizona</a></h4>";
			echo "</div>";
            ?>
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