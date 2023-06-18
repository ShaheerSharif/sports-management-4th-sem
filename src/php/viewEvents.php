<?php
$db_host = 'localhost';
$db_name = 'sport';
$db_user = 'root';
$db_pass = '';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM venue";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sports Management System - View Events</title>
    <style>
        @import url('./global.css');

        h1 {
            color: #FF5500;
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #FFFFFF;
        }

        th {
            background-color: #003399;
        }

        tr:nth-child(even) {
            background-color: #666666;
        }

        .back-button {
            display: block;
            width: 120px;
            margin: 20px auto;
            text-align: center;
            background-color: #333;
            color: #FFFFFF;
            padding: 10px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <h1>View Events</h1>
    <table>
        <tr>
            <th>Event Name</th>
            <th>Sport Name</th>
            <th>Venue Address</th>
            <th>Starting Date</th>
            <th>End Date</th>
            <th>Price</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['event_name'] . "</td>";
                echo "<td>" . $row['sport_name'] . "</td>";
                echo "<td>" . $row['venue_address'] . "</td>";
                echo "<td>" . $row['starting_date'] . "</td>";
                echo "<td>" . $row['end_date'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No events found</td></tr>";
        }
        ?>
    </table>
    <a href="menu.php" class="back-button">Back</a>
</body>

</html>
