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
            
            echo "<h4>Here is a list of users from University of Southern California</h4>";
            echo "<h4>Reach out to them via email to try to make friends, hear advice, or just chat!</h4>";
            echo "<br>";

            echo "<h4>Type in which group you would like to join:</h4>";
            echo "<form class='joinGroup' action='join-usc.php' method='post'>";
            echo "<table class='group'>";
            echo "<tr>";
            echo "<th><label for='email'>Email:</label></th>";
            echo "<td><input type='text' name='email' /></td>";
            echo "</tr>";
            echo "<tr>";
            echo "<th><label for='Subject'>Subject:</label></th>";
            echo "<td><input type='text' name='subject' /></td>";
            echo "</table>";
            echo "<br>";
            echo "<input type='hidden' name='college' value='University of Southern California'>";
            echo "<input class='createAccountButton' type='Submit' name='Submit' value='Join a group'>";

            $query = "select firstName, lastName, email, phoneNumber, year from weavers.Users where collegeName = 'University of Southern California' and year <> 'HS - JR'  and year <> 'HS - SR' and subject = 'ARG' order by 	case year WHEN 'Senior' THEN 0 	WHEN 'Junior' THEN 1     WHEN 'Sophomore' THEN 2     WHEN 'Freshman' THEN 3 end";


            echo "<br>";
            echo "<h1>Argiculture</h1>";

            if ($stmt = $con->prepare($query)) {
                $stmt->execute();
                $stmt->bind_result($firstName, $lastName, $email, $phoneNumber, $year);
                echo "<div class='tableWrap'>";
                echo "<table>";
                echo "<tr>";
                echo "<th>First name</th>";
                echo "<th>Last name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone number</th>";
                echo "<th>Year</th>";
                echo "</td>";

                while ($stmt->fetch()) {
                    $numberOfStudents = array($firstName);         
                    
                    for ($x = 1; $x <= count($numberOfStudents); $x++) {
                        echo "<tr>";
                        echo "<td>$firstName</td>";
                        echo "<td>$lastName</td>";
                        echo "<td><a href=mailto:>" . $email . "</a></td>";
                        echo "<td>$phoneNumber</td>";
                        echo "<td>$year</td>";
                        echo "<tr>";
                    }
                }
                echo "</table>";
                echo "</div>";
                $stmt->close();
            }

            echo "<br>";
            echo "<hr>";

            $query = "select firstName, lastName, email, phoneNumber, year from weavers.Users where collegeName = 'University of Southern California' and year <> 'HS - JR'  and year <> 'HS - SR' and subject = 'BIO' order by 	case year WHEN 'Senior' THEN 0 	WHEN 'Junior' THEN 1     WHEN 'Sophomore' THEN 2     WHEN 'Freshman' THEN 3 end";


            echo "<br>";
            echo "<h1>Biology</h1>";

            if ($stmt = $con->prepare($query)) {
                $stmt->execute();
                $stmt->bind_result($firstName, $lastName, $email, $phoneNumber, $year);
                echo "<div class='tableWrap'>";
                echo "<table>";
                echo "<tr>";
                echo "<th>First name</th>";
                echo "<th>Last name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone number</th>";
                echo "<th>Year</th>";
                echo "</td>";

                while ($stmt->fetch()) {
                    $numberOfStudents = array($firstName);         
                    
                    for ($x = 1; $x <= count($numberOfStudents); $x++) {
                        echo "<tr>";
                        echo "<td>$firstName</td>";
                        echo "<td>$lastName</td>";
                        echo "<td><a href=mailto:>" . $email . "</a></td>";
                        echo "<td>$phoneNumber</td>";
                        echo "<td>$year</td>";
                        echo "<tr>";
                    }
                }
                echo "</table>";
                echo "</div>";
                $stmt->close();
            }

            echo "<br>";
            echo "<hr>";

            $query = "select firstName, lastName, email, phoneNumber, year from weavers.Users where collegeName = 'University of Southern California' and year <> 'HS - JR'  and year <> 'HS - SR' and subject = 'CIS' order by 	case year WHEN 'Senior' THEN 0 	WHEN 'Junior' THEN 1     WHEN 'Sophomore' THEN 2     WHEN 'Freshman' THEN 3 end";


            echo "<br>";
            echo "<h1>Computer Information Systems</h1>";

            if ($stmt = $con->prepare($query)) {
                $stmt->execute();
                $stmt->bind_result($firstName, $lastName, $email, $phoneNumber, $year);
                echo "<div class='tableWrap'>";
                echo "<table>";
                echo "<tr>";
                echo "<th>First name</th>";
                echo "<th>Last name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone number</th>";
                echo "<th>Year</th>";
                echo "</td>";

                while ($stmt->fetch()) {
                    $numberOfStudents = array($firstName);         
                    
                    for ($x = 1; $x <= count($numberOfStudents); $x++) {
                        echo "<tr>";
                        echo "<td>$firstName</td>";
                        echo "<td>$lastName</td>";
                        echo "<td><a href=mailto:>" . $email . "</a></td>";
                        echo "<td>$phoneNumber</td>";
                        echo "<td>$year</td>";
                        echo "<tr>";
                    }
                }
                echo "</table>";
                echo "</div>";
                $stmt->close();
            }

            echo "<br>";
            echo "<hr>";

            $query = "select firstName, lastName, email, phoneNumber, year from weavers.Users where collegeName = 'University of Southern California' and year <> 'HS - JR'  and year <> 'HS - SR' and subject = 'FTV' order by 	case year WHEN 'Senior' THEN 0 	WHEN 'Junior' THEN 1     WHEN 'Sophomore' THEN 2     WHEN 'Freshman' THEN 3 end";


            echo "<br>";
            echo "<h1>Film and Television</h1>";

            if ($stmt = $con->prepare($query)) {
                $stmt->execute();
                $stmt->bind_result($firstName, $lastName, $email, $phoneNumber, $year);
                echo "<div class='tableWrap'>";
                echo "<table>";
                echo "<tr>";
                echo "<th>First name</th>";
                echo "<th>Last name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone number</th>";
                echo "<th>Year</th>";
                echo "</td>";

                while ($stmt->fetch()) {
                    $numberOfStudents = array($firstName);         
                    
                    for ($x = 1; $x <= count($numberOfStudents); $x++) {
                        echo "<tr>";
                        echo "<td>$firstName</td>";
                        echo "<td>$lastName</td>";
                        echo "<td><a href=mailto:>" . $email . "</a></td>";
                        echo "<td>$phoneNumber</td>";
                        echo "<td>$year</td>";
                        echo "<tr>";
                    }
                }
                echo "</table>";
                echo "</div>";
                $stmt->close();
            }

            echo "<br>";
            echo "<hr>";

            $query = "select firstName, lastName, email, phoneNumber, year from weavers.Users where collegeName = 'University of Southern California' and year <> 'HS - JR'  and year <> 'HS - SR' and subject = 'MUS' order by 	case year WHEN 'Senior' THEN 0 	WHEN 'Junior' THEN 1     WHEN 'Sophomore' THEN 2     WHEN 'Freshman' THEN 3 end";


            echo "<br>";
            echo "<h1>Music</h1>";

            if ($stmt = $con->prepare($query)) {
                $stmt->execute();
                $stmt->bind_result($firstName, $lastName, $email, $phoneNumber, $year);
                echo "<div class='tableWrap'>";
                echo "<table>";
                echo "<tr>";
                echo "<th>First name</th>";
                echo "<th>Last name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone number</th>";
                echo "<th>Year</th>";
                echo "</td>";

                while ($stmt->fetch()) {
                    $numberOfStudents = array($firstName);         
                    
                    for ($x = 1; $x <= count($numberOfStudents); $x++) {
                        echo "<tr>";
                        echo "<td>$firstName</td>";
                        echo "<td>$lastName</td>";
                        echo "<td><a href=mailto:>" . $email . "</a></td>";
                        echo "<td>$phoneNumber</td>";
                        echo "<td>$year</td>";
                        echo "<tr>";
                    }
                }
                echo "</table>";
                echo "</div>";
                $stmt->close();
            }

            echo "<br>";
            echo "<hr>";

            $query = "select firstName, lastName, email, phoneNumber, year from weavers.Users where collegeName = 'University of Southern California' and year <> 'HS - JR'  and year <> 'HS - SR' and subject = 'PSY' order by 	case year WHEN 'Senior' THEN 0 	WHEN 'Junior' THEN 1     WHEN 'Sophomore' THEN 2     WHEN 'Freshman' THEN 3 end";

            echo "<br>";
            echo "<h1>Psychology</h1>";

            if ($stmt = $con->prepare($query)) {
                $stmt->execute();
                $stmt->bind_result($firstName, $lastName, $email, $phoneNumber, $year);
                echo "<div class='tableWrap'>";
                echo "<table>";
                echo "<tr>";
                echo "<th>First name</th>";
                echo "<th>Last name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone number</th>";
                echo "<th>Year</th>";
                echo "</td>";

                while ($stmt->fetch()) {
                    $numberOfStudents = array($firstName);         
                    
                    for ($x = 1; $x <= count($numberOfStudents); $x++) {
                        echo "<tr>";
                        echo "<td>$firstName</td>";
                        echo "<td>$lastName</td>";
                        echo "<td><a href=mailto:>" . $email . "</a></td>";
                        echo "<td>$phoneNumber</td>";
                        echo "<td>$year</td>";
                        echo "<tr>";
                    }
                }
                echo "</table>";
                echo "</div>";
                $stmt->close();
            }

            echo "<br>";
            echo "<hr>";

            $query = "select firstName, lastName, email, phoneNumber, year from weavers.Users where collegeName = 'University of Southern California' and year <> 'HS - JR'  and year <> 'HS - SR' and subject = 'SCM' order by 	case year WHEN 'Senior' THEN 0 	WHEN 'Junior' THEN 1     WHEN 'Sophomore' THEN 2     WHEN 'Freshman' THEN 3 end";

            echo "<br>";
            echo "<h1>Supply Chain Management</h1>";

            if ($stmt = $con->prepare($query)) {
                $stmt->execute();
                $stmt->bind_result($firstName, $lastName, $email, $phoneNumber, $year);
                echo "<div class='tableWrap'>";
                echo "<table>";
                echo "<tr>";
                echo "<th>First name</th>";
                echo "<th>Last name</th>";
                echo "<th>Email</th>";
                echo "<th>Phone number</th>";
                echo "<th>Year</th>";
                echo "</td>";

                while ($stmt->fetch()) {
                    $numberOfStudents = array($firstName);         
                    
                    for ($x = 1; $x <= count($numberOfStudents); $x++) {
                        echo "<tr>";
                        echo "<td>$firstName</td>";
                        echo "<td>$lastName</td>";
                        echo "<td><a href=mailto:>" . $email . "</a></td>";
                        echo "<td>$phoneNumber</td>";
                        echo "<td>$year</td>";
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