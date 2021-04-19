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

			$query = "select firstName, lastName, year, subject, email, phoneNumber from weavers.Users";

			echo "<h4>At MentorMatch, we want to ensure that everyone is getting the information they need, regardless of their physical location.</h4>";
			echo "<hr>";
			echo "<h4>Select which level of education you are below:</h4>";

			echo "<div id='high-school'>";
				echo "<img src='high-school.jpg' height='250' width='400' style='margin-left: 1.5vw;'></img>";
				echo "<h4><a href='high-school.php'>College bound high schoolers</a></h4>";
			echo "</div>";

			echo "<div id='high-school'>";
				echo "<img src='wpc.jfif' height='250' width='400' style='margin-left: 1.5vw;'></img>";
				echo "<h4><a href='college-selection.php'>College</a></h4>";
			echo "</div>";

			echo "<hr>";
			echo "<br>";
            echo "<h4>Here are groups available for the subject you selected during the account creation process!</h4>";

            if ($stmt = $con->prepare($query)) {
                $stmt->execute();
				$stmt->bind_result($firstName, $lastName, $year, $subject, $email, $phoneNumber);
				echo "<div class='tableWrap'>";
                echo "<table class='joinGroup'>";
                echo "<tr>";
                echo "<th>First name</th>";
                echo "<th>Last name</th>";
                echo "<th>Year</th>";
                echo "<th>Subject</th>";
                echo "<th>Email</th>";
                echo "<th>Phone number</th>";
				echo "</td>";
				
				$user_subject =$row1['subject'];

				// echo "<h4>$user_subject</h4>";

                while ($stmt->fetch()) {
                    $numberOfStudents = array($firstName);         
                    
                    for ($x = 1; $x <= count($numberOfStudents); $x++) {
						if ($user_subject == $subject) {
							echo "<tr>";
							echo "<td>$firstName</td>";
							echo "<td>$lastName</td>";
							echo "<td>$year</td>";
							echo "<td>$subject</td>";
							echo "<td><a href=mailto:>" . $email . "</a></td>";
							echo "<td>$phoneNumber</td>";
							echo "<tr>";
						}  
                    }
                }
				echo "</table>";
				echo "</div>";
                $stmt->close();
            }
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