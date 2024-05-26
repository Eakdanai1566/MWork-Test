<?php
 
 $servername = "localhost";
 $dbusername = "root";
 $dbpassword = "";
 $dbname = "mtest";

 // Create connection
 $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $position = $_POST['position'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $type = $_POST['type'];
    $reason = $_POST['reason'];
    $startdate = $_POST['startdat'];
    $enddate = $_POST['enddat'];
    $subdate = $_POST['subdate'];

    $sql = "INSERT INTO leave_request (firstname, lastname, position, email, phonenumber, leavetype, reason, startdat, enddat, savedat, stat) 
            VALUES ('$firstname', '$lastname', '$position', '$email', '$number', '$type', '$reason', '$startdate', '$enddate', ' $subdate', 'Considering')";

    $conn->query($sql);

    header("Location: /index.php");
    exit();

    }
?>
