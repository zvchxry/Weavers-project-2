<?php
include('login.php'); 

if(isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="weavers.css"
		rel="stylesheet">
    <title>Document</title>
</head>
<body>

	<script type="text/javascript">
		function checkMentor (){
			var val = document.getElementById('MentorValue').value;
			var name = document.getElementById('first').value;
			if (String(val) == "Mentor"){
				document.getElementById('MentorValue').value = 1;
				alert("A mentor account has been created for "+name+"." )
			}
			else{
				document.getElementById('MentorValue').value = 0;
				alert("A student account has been created for "+name+".")
			}

		}
	</script>	

	<div id="wrapper">
	<h1>MentorMatch</h1>

	<!-- <div id="Arizona-State-Flag"></div>-->

	<nav class="logNav">
		<ul>
			<li><a href="index.php">Login</a></li>
			<li><a class="current" href="create_an_account.php">Create an account</a></li>
		</ul> 
	</nav> 

	<main>
		<div class="main-login">
			<br>
			<div class="create_account">
                <h3>Create an account</h3>
                
				<form class="createAccountForm" action="AccountCreation.php" id="accountCreation" method="post">
					<table>
						<tr>
							<th>First name:</th>
							<th><input type="text" name="first" id="first" ></th>
						</tr>

						<tr>
							<th>Last Name:</th>
							<th><input type="text" name="last" ></th>
						</tr>
						
						<tr>
							<th>Password:</th>
							<th><input type="password" name="pass" >
							</th>
						</tr>
						
						<tr>
							<th>Email:</th>
							<th><input type="text" name="email" ></th>
						</tr>
						
						<tr>			
							<th>Phone Number:</th>
							<th><input type="number" name="phone" min="0" max="9999999999" >
							</th>
						</tr>

						<tr>
							<th>Mentor: </th>
							<th><select name="MentorValue" id="MentorValue" >
								<option>Student</option>
								<option>Mentor</option>
							</select> 
							</th>
						</tr>


						<tr>
							<th>Year: </th>
							<th><select name="year" >
								<option>Freshmen</option>
								<option>Sophmore</option>
								<option>Junior</option>
								<option>Senior</option>
								<option>Mentor</option>
							</select> 
							</th>
						</tr>
						
						<tr>
							<th>Subject: </th>
							<th><select name="subject" >
								<option>PSY</option>
								<option>BDA</option>
								<option>FIN</option>
								<option>CIS</option>
								<option>MKT</option>
								<option>SCM</option>
								<option>ACC</option>
							</select> 
							</th>
						</tr>

						<tr>
							<th>College that you plan to attend: </th>
							<th><select name="college" >
								<option>Arizona State University</option>
								<option>University of Southern California</option>
								<option>University of Arizona :(</option>
								<option>Carnegie Mellon University</option>
								<option>Wayne State University</option>
								<option>University of Georgia</option>
								<option>University of Texas</option>
							</select> 
							</th>
						</tr>
					</table>
					<br>
					<input style='width: 6.5vw; margin-right: 20vw;' class="createAccountButton" action="AccountCreation.php" type="submit" name="Submit" value="Submit" onclick="checkMentor()">
					<br>
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