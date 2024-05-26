<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Requests List</title>
    <link rel="stylesheet" href="CSS/indexcss.css">
    <style>
        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 500px;
        }

        .form-container label,
        .form-container input,
        .form-container select {
            width: 100%;
            margin-bottom: 10px;
        }

        .form-container input[type="submit"] {
            width: auto;
        }
    </style>
</head>
<body>
<div>
    <table style="border-collapse: collapse; width: 75%;" border="1" align="center">
        <tbody>
        <tr>
            <td class="banner">
                Banner
            </td>
        </tr>
        <tr style="height: 50px;">
            <td>
                <nav class="NavContainer">
                    <ul class="NavLeft">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="leavelist.php">Leave List</a></li>
                    </ul>
                </nav>
            </td>
        </tr>
        </tbody>
    </table>
    <table style="border-collapse: collapse; width: 75%;" border="1" align="center">
        <tbody>
        <tr>
            <td class="body1">
                <table style="border-collapse: collapse" border="1" align="center" class="profpic">
                    <tbody>
                    <tr>
                        <td class="Banner">
                            <!-- Placeholder for the Banner in body1 -->
                        </td>
                    </tr>
                    </tbody>
                </table>
            </td>
            <td class="body2">
                        <?php
                            $servername = "localhost";
                            $dbusername = "root";
                            $dbpassword = "";
                            $dbname = "mtest";
                            
                            // Create connection
                            $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
                            
                            // Check if the firstname parameter is set in the URL
                            if(isset($_GET['firstname'])) {
                                $firstname = $_GET['firstname'];
                            
                                $sql = "SELECT * FROM leave_request WHERE firstname = ?";
                                
                                $stmt = $conn->prepare($sql);
                                $stmt->bind_param("s", $firstname);
                                $stmt->execute();
                                $res = $stmt->get_result();
                            
                                if($res->num_rows > 0) {
                                    echo '<div class="vertical-table">';
                                    while($row = $res->fetch_assoc()) {
                                        echo '<div class="vertical-row">';
                                        echo '<div class="vertical-cell"><strong>First Name:</strong> ' . $row['firstname'] . '</div>';
                                        echo '<div class="vertical-cell"><strong>Last Name:</strong> ' . $row['lastname'] . '</div>';
                                        echo '<div class="vertical-cell"><strong>Position:</strong> ' . $row['position'] . '</div>';
                                        echo '<div class="vertical-cell"><strong>E-Mail:</strong> ' . $row['email'] . '</div>';
                                        echo '<div class="vertical-cell"><strong>Phone Number:</strong> ' . $row['phonenumber'] . '</div>';
                                        echo '<div class="vertical-cell"><strong>Leave Type:</strong> ' . $row['leavetype'] . '</div>';
                                        echo '<div class="vertical-cell"><strong>Reason:</strong> ' . $row['reason'] . '</div>';
                                        echo '<div class="vertical-cell"><strong>Start Date:</strong> ' . $row['startdat'] . '</div>';
                                        echo '<div class="vertical-cell"><strong>End Date:</strong> ' . $row['enddat'] . '</div>';
                                        echo '<div class="vertical-cell"><strong>Submit Date:</strong> ' . $row['savedat'] . '</div>';
                                        echo '<div class="vertical-cell">';

                                        echo '<form action="/PHP/submitstat.php?firstname=' . $row["firstname"] . '" method="post">';
                                        echo '<select id="status" name="status">';
                                        echo '<option value="approve">Approve</option>';
                                        echo '<option value="reject">Reject</option>';
                                        echo '</select>';
                                        echo '<input type="submit" value="Update Status">';
                                        echo '</form>';
                                        echo '</div>';
                                        echo '</div>';
                                        
                                    }
                                    echo '</div>';
                                } else {
                                    echo "0 results";
                                }
                                     
                                
                            
                                $stmt->close();
                            } else {
                                echo "First Name not provided";
                            }
                            
                            $conn->close();
                        ?>
            </td>
            <td class="body3">
                <!-- Placeholder for body3 -->
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
