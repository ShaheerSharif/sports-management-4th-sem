<?php
$db_host = 'localhost';
$db_name = 'sport';
$db_user = 'root';
$db_pass = '';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT uname, pwd FROM login";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sports Management System - Admins</title>
    <style>
        @import url('./global.css');

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #fff;
        }

        th {
            background-color: #003399;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #666666;
        }

        .back-button {
            display: block;
            width: fit-content;
            margin: 20px auto;
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <h1>Admins</h1>
    <table>
        <tr>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['uname'] . "</td>";
                echo "<td>" . $row['pwd'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='2'>No admins found</td></tr>";
        }
        ?>
    </table>
    <a href="menu.php" class="back-button">Back to Menu</a>
</body>

</html>
