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
            
            echo "<h4>Here is a list of mentors by school</h4>";
            echo "<h4>They'd love to help you, add them to your profile to make sure you keep in contact!</h4>";
            echo "<br>";

            echo "<h4>Type in which mentor you'd like to work with:</h4>";
            echo "<form class='joinGroup' action='join-group.php' method='post'>";
            echo "<table class='group'>";
            echo "<tr>";
            echo "<th><label for='email'>Email:</label></th>";
            echo "<td><input type='text' name='userEmail1' /></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th><label for='mentor'>Mentor email:</label></th>";
            echo "<td><input type='text' name='mentorEmail1' /></td>";
			echo "</tr>";
			echo "<tr>";
            echo "<th><label for='college'>College:</label></th>";
			echo "<td><select name='college'/>";
			echo "<option value='choice1'>Arizona State University</option>";
			echo "<option value='choice2'>University of Southern California</option>";
			echo "<option value='choice3'>University of Arizona :(</option>";
			echo "</select>";
			echo "</td>";
			echo "</tr>";
			echo "</table>";
            echo "<input class='createAccountButton' type='Submit' name='Submit' value='Work with mentor'>";

            echo "<br>";
            echo "<hr>";

            $query = "select firstName, lastName, email, phoneNumber, year, collegeName from weavers.Users where year = 'Mentor' order by  	case collegeName WHEN 'Arizona State University' THEN 0 	WHEN 'University of Arizona' THEN 1     WHEN 'University of Southern California' THEN 2     END";

            echo "<br>";
            echo "<h1>Mentors</h1>";

            if ($stmt = $con->prepare($query)) {
                $stmt->execute();
                $stmt->bind_result($firstName, $lastName, $email, $phoneNumber, $year, $collegeName);
                echo "<div class='tableWrap'>";
                echo "<table>";
                echo "<tr>";
                echo "<th>First name</th>";
                echo "<th>Last name</th>";
                echo "<th>Email</th>";
				echo "<th>Phone number</th>";
                echo "<th>College</th>";
                echo "</td>";

                while ($stmt->fetch()) {
                    $numberOfStudents = array($firstName);         
                    
                    for ($x = 1; $x <= count($numberOfStudents); $x++) {
                        echo "<tr>";
                        echo "<td>$firstName</td>";
                        echo "<td>$lastName</td>";
                        echo "<td><a href=mailto:>" . $email . "</a></td>";
                        echo "<td>$phoneNumber</td>";
						echo "<td>$collegeName</td>";
                        echo "<tr>";
                    }
                }
                echo "</table>";
                echo "</div>";
                $stmt->close();
            }

            echo "<br>";
            echo "<hr>";
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