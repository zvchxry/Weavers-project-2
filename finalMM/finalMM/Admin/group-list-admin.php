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
	<div id="wrapper">
		<div id="header">
			<h1>MentorMatch</h1>
		</div>
		
		<nav>
			<ul>
				<hr>
				<li><a href="Home.html">Home</a></li>
				<hr>
				<li><a href="account1.php">Account</a></li>
				<hr>
				<li><a href="group-list-admin.php">Groups</a></li>
				<hr>
				<li><a href="student-list-admin.php">Students</a></li>
				<hr>
				<li><button id="logoff" type="button">Log off</button></li>
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

            $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());

            //$con->close();

            $query = "select firstName, lastName, year, subject, email, phoneNumber from weavers.Users where mentor = 1";

            echo "<h4>List of students available for mentoring</h4>";

            if ($stmt = $con->prepare($query)) {
                $stmt->execute();
                $stmt->bind_result($firstName, $lastName, $year, $subject, $email, $phoneNumber);
                echo "<table>";
                echo "<tr>";
                echo "<th>First name</th>";
                echo "<th>Last name</th>";
                echo "<th>Year</th>";
                echo "<th>Subject</th>";
                echo "<th>Email</th>";
                echo "<th>Phone number</th>";
                echo "</td>";

                while ($stmt->fetch()) {
                    $numberOfStudents = array($firstName);         
                    
                    for ($x = 1; $x <= count($numberOfStudents); $x++) {
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
                echo "</table>";
                $stmt->close();
            }

            $query = "select firstName, lastName, year, subject, email, phoneNumber from weavers.Users where mentor = 0";

            echo "<h4>List of students already working with a mentor</h4>";

            if ($stmt = $con->prepare($query)) {
                $stmt->execute();
                $stmt->bind_result($firstName, $lastName, $year, $subject, $email, $phoneNumber);
                echo "<table>";
                echo "<tr>";
                echo "<th>First name</th>";
                echo "<th>Last name</th>";
                echo "<th>Year</th>";
                echo "<th>Subject</th>";
                echo "<th>Email</th>";
                echo "<th>Phone number</th>";
                echo "</td>";

                while ($stmt->fetch()) {
                    $numberOfStudents = array($firstName);         
                    
                    for ($x = 1; $x <= count($numberOfStudents); $x++) {
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
                echo "</table>";
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
	</body>
</html>