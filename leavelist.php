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
                <!-- Start of the form in body2 -->
                <div class="form-container">
                    <form action="/PHP/submitstat.php" method="post">
                        <?php
                        $servername = "localhost";
                        $dbusername = "root";
                        $dbpassword = "";
                        $dbname = "mtest";
                       
                        // Create connection
                        $conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

                        $sql = "SELECT * FROM leave_request";
                        $res = $conn->query($sql);

                        echo '<table border="1" style="width: 70%;">';
                        echo '<thead>';
                        echo '<tr>';
                        echo '<th>First Name</th>';
                        echo '<th>Last Name</th>';
                        echo '<th>Status</th>';
                        echo '<th>View</th>';
                        echo '</tr>';
                        echo '</thead>';
                        echo '<tbody>';
                        foreach ($res as $request) {
                            echo '<tr>';
                            echo '<td>' . $request["firstname"] . '</td>';
                            echo '<td>' . $request["lastname"] . '</td>';
                            echo '<td>' . $request["stat"] . '</td>';
                            echo '<td><a href="view.php?firstname=' . $request["firstname"] . '">View Detail</a></td>';

                            echo '</tr>';
                        }
                        echo '</tbody>';
                        echo '</table>';


                        ?>
                    </form>
                </div>
                <!-- End of the form in body2 -->
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
