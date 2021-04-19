<?php

//Variable declarations
$newUserFirstName = "";
$newUserLastName = "";
$newUserPWD = "";
$newUserEmail = "";
$newUserPhoneNumber = "";
$newUserMentor = "";
$newUserYear = "";
$newUserSubject = "";
$newUserCollege = "";


$mentor = '1234';
$user = isset($_POST['userId']);

$a = isset($_POST['first']);
if ($a == 1) {
    $newUserFirstName = $_POST['first'];
}

$b = isset($_POST['last']);
if ($b == 1) {
    $newUserLastName = $_POST['last'];
}

$c = isset($_POST['pass']);
if ($c == 1) {
    $newUserPWD = $_POST['pass'];
}

$d = isset($_POST['email']);
if ($d == 1) {
    $newUserEmail = $_POST['email'];
}

$e = isset($_POST['phone']);
if ($e == 1) {
    $newUserPhoneNumber = $_POST['phone'];
}

$f = isset($_POST['MentorValue']);
if ($f == 1) {
    $newUserMentor = $_POST['MentorValue'];
}

$g = isset($_POST['year']);
if ($g == 1) {
    $newUserYear = $_POST['year'];
}

$h = isset($_POST['subject']);
if ($h == 1) {
    $newUserSubject = $_POST['subject'];
}

$i = isset($_POST['college']);
if ($i == 1) {
    $newUserCollege = $_POST['college'];
}

$host="107.180.1.16";
$port=3306;
$username="weavers";
$password="!!Weavers";
$dbname="weavers";

$con = new mysqli($host, $username, $password, $dbname, $port)
    or die ('Could not connect to the database server' . mysqli_connect_error());

$sql="insert into weavers.Users values (default, 
    '$newUserFirstName', 
    '$newUserLastName', 
    '$newUserPWD', 
    '$newUserEmail', 
    '$newUserPhoneNumber', 
    '$newUserMentor', 
    default, 
    '$newUserYear', 
    '$newUserSubject', 
    NULL, 
    '$newUserCollege')";

if ($con->query($sql) === true) {
    // Change to correct file path
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>