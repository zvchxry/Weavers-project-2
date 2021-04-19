
<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password is invalid";
}
else
{
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$host="107.180.1.16";
$port=3306;
$socket="";
$user="weavers";
$pass="!!Weavers";
$dbname="weavers";

$con = new mysqli($host, $user, $pass, $dbname, $port, $socket)
	or die ('Could not connect to the database server' . mysqli_connect_error());

//$con->close();

$query = "select * from Users where userPassword='$password' AND email='$username'";

$result = mysqli_query($con, $query); 
if ($result) 
{ 
    // it return number of rows in the table. 
    $row = mysqli_num_rows($result); 
       

    // close the result. 
    mysqli_free_result($result); 

}

// Selecting Database
// SQL query to fetch information of registerd users and finds user match.
if ($row == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: profile.php"); // Redirecting To Other Page
} else {
$error = "Username or Password is invalid";
}
mysqli_close($con); // Closing Connection
}
}
?>
