<?php

        if(isset($_GET['firstname'])) {
            $servername = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "mtest";

            // Create connection
            $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

            $firstname = $_GET['firstname'];
            $stat = $_POST['status'];

            $sql = "UPDATE leave_request SET stat = '$stat' WHERE firstname = '$firstname'";
            echo $firstname;
            echo $stat;
            $conn->query($sql);
            header("Location: /leavelist.php");
            exit();
            
        }else {
            header("Location: /leavelist.php");
            exit();
        }
?>
