<html>
<body>
<?php

$a = isset($_POST['userEmail1']);
if ($a == 1) {
    $userEmail = $_POST['userEmail1'];
}

$b = isset($_POST['mentorEmail1']);
if ($b == 1) {
    $mentorEmail = $_POST['mentorEmail1'];
}

$c = isset($_POST['college']);
if ($c == 1) {
    if ($c == 'choice1') {
        $userCollege = 'Arizona State University';
    } elseif ($c == 'choice2') {
        $userCollege = 'University of Southern California';
    } else {
        $userCollege = 'University of Arizona';
    }
    // $userCollege = $_POST['college'];
}
  
$host="107.180.1.16";
$port=3306;
$username="weavers";
$password="!!Weavers";
$dbname="weavers";

$con = new mysqli($host, $username, $password, $dbname, $port)
    or die ('Could not connect to the database server' . mysqli_connect_error());

$sql = "update weavers.Users SET mentorMenteeEmail2 = '$mentorEmail' where email = '$userEmail' and collegeName = '$userCollege'";
if ($con->query($sql) === TRUE) {
    header('Location: /finalMM/account1.php');
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}

$con->close();
?>

</body>
</html>
