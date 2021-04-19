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
	<h1>MentorMatch</h1>
	
	<nav class="nav">
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a class="current" href="account1.php">Account</a></li>
			<li><a href="groups.php">Groups</a></li>
			<li><a href="mentors.php">Mentors</a></li>
			<p id="welcome">Welcome  <i><?php echo $login_session; ?></i></p>
			<img src="" id="picture">
			<li><button id="logoff" type="button" onclick="window.location.href = 'logout.php';">Log Off</button></li>
		</ul> 
	</nav>

	<main>
		<div class="main">
			<br>
			<br>
			<div class="profile">
				<br>
				<input type="file" name="profilePic" id="profilePic" class="profilePic">
				<button type="button" id="niceButton" class="niceButton"> Change Profile Picture</button>
				<div class="profilePicture" id="profilePicture">
					<img src="" id="userPic" class="userPicture">
					<span class="defaultImage"><img class="defaultPic" src="defaultPic.png"></span>
				</div>
				<?php
				
				$host="107.180.1.16";
				$port=3306;
				$socket="";
				$user="weavers";
				$password="!!Weavers";
				$dbname="weavers";

				$query = "select firstName, lastName, email from weavers.Users";

				if ($stmt = $con->prepare($query)) {
					$stmt->execute();
					$stmt->bind_result($firstName, $lastName, $email);
					while ($stmt->fetch()) {
						$emailOfStudents = array($email);         
						
						for ($x = 1; $x <= count($emailOfStudents); $x++) {
							if ($login_session == $email) {
								echo "<h2>$firstName $lastName</h2>";
							}  
						}
					}
				}

				?>
			</div>
		</div>

		<div id="email">
				<?php
				$host="107.180.1.16";
				$port=3306;
				$socket="";
				$user="weavers";
				$password="!!Weavers";
				$dbname="weavers";

            // $loggedInUserSubject = $_SESSION['subject'];
            echo "<form class='joinGroup' action='join-asu.php' method='post'>";

			$query = "select firstName, email, phoneNumber, year, collegeName, mentorMenteeEmail2 from weavers.Users";

            echo "<br>";
            echo "<h1>Profile information</h1>";

            if ($stmt = $con->prepare($query)) {
                $stmt->execute();
                $stmt->bind_result($firstName,$email, $phoneNumber, $year, $collegeName, $mentorMenteeEmail2);
                echo "<table>";
                echo "<tr>";
                echo "<th>Phone number</th>";
                echo "<th>Email</th>";
				echo "<th>Year</th>";
				echo "<th>College name</th>";
				echo "<th>Mentor email</th>";
				echo "</td>";
				
				

                while ($stmt->fetch()) {
					$emailOfStudents = array($email);      
					   
                    
                    for ($x = 1; $x <= count($emailOfStudents); $x++) {
						if ($login_session == $email) {
							echo "<tr>";
							echo "<td>$phoneNumber</td>";
							echo "<td><a href=mailto:>" . $email . "</a></td>";
							echo "<td>$year</td>";
							echo "<td>$collegeName</td>";
							echo "<td><a href=mailto:>" . $mentorMenteeEmail2 . "</a></td>";
							echo "<tr>";
						}  
                    }
                }
                echo "</table>";
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
		const profilePic = document.getElementById("profilePic");
		const imageEle = document.getElementById("profilePicture");
		const userPic = imageEle.querySelector(".userPicture");
		const defualtPic = imageEle.querySelector(".defaultImage");

		const addFileButton = document.getElementById("profilePic");
		const niceButton = document.getElementById("niceButton");

		niceButton.addEventListener("click", function(){
			addFileButton.click();
		})

		profilePic.addEventListener("change", function(){
			const file = this.files[0];
			
			if (file){
				const reader = new FileReader();

				defualtPic.style.display = "none";
				userPic.style.display = "block";

				reader.addEventListener("load", function(){
					userPic.setAttribute("src", this.result);
					localStorage.setItem("profilePicture", this.result);
					localStorage.setItem("active", true);				
				});

				defualtPic.style.display = "none";
				userPic.style.display = "block";

				reader.readAsDataURL(file);
			}
			else {
				defualtPic.style.display = "block";
				userPic.style.display = "none";
			}
		});

		window.onload = function(){
			var i = localStorage.getItem("profilePicture");
			var active = localStorage.getItem("active");
			userPic.setAttribute("src", i);

			if (active !== true) {
				console.log("Active");
				defualtPic.style.display = "none";
				userPic.style.display = "block";
			}
		}

	</script>

	</body>
</html>