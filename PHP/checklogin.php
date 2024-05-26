<?php

    function login($username, $password){

        include("conn.php");
    
        $log = $conn->prepare("SELECT * FROM member WHERE memusername = ?");
        $log->bind_param("s", $username);
        $log->execute();
        $res = $log->get_result();
        if($res->num_rows > 0){
            $data = $res->fetch_assoc();
            if($data['mempassword'] === $password){
                $url = "/index.php";
                header( 'Location: '. $url );
                exit();  
            }else{
                echo "<h2>Invalid Username or Password</h2>";
            }
        }else{
            echo "<h2>Invalid Username or Password</h2>";
        }

    }


    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $login = login($username, $password)

?>