<html>
<body>
<?php

$a = isset($_POST['email']);
if ($a == 1) {
    $userEmail = $_POST['email'];
}

$b = isset($_POST['subject']);
if ($b == 1) {
    $userSubject = $_POST['subject'];
}

$c = isset($_POST['college']);
if ($c == 1) {
    $userCollege = $_POST['college'];
}
  
$host="107.180.1.16";
$port=3306;
$username="weavers";
$password="!!Weavers";
$dbname="weavers";

$con = new mysqli($host, $username, $password, $dbname, $port)
    or die ('Could not connect to the database server' . mysqli_connect_error());

$sql = "update weavers.Users SET subject = '$userSubject' where email = '$userEmail' and collegeName = 'University of Arizona'";
if ($con->query($sql) === TRUE) {
    header('Location: /finalMM/ua.php');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

</body>
</html>
