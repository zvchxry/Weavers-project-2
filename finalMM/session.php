<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$host="107.180.1.16";
$port=3306;
$user="weavers";
$password="!!Weavers";
$dbname="weavers";

$con = new mysqli($host, $user, $password, $dbname, $port)
	or die ('Could not connect to the database server' . mysqli_connect_error());


// Selecting Database
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($con, "select email from Users where email='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['email'];

$ses_sql=mysqli_query($con, "select subject from Users where email='$user_check'");
$row1 = mysqli_fetch_assoc($ses_sql);
$user_subject =$row1['subject'];

if(!isset($login_session)){
mysqli_close($con); // Closing Connection
}
?>