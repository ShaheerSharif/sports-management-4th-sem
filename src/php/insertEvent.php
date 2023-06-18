<?php
$db_host = 'localhost';
$db_name = 'sport';
$db_user = 'root';
$db_pass = '';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $event_name = $_POST['event_name'];
    $sport_name = $_POST['sport_name'];
    $venue_address = $_POST['venue_address'];
    $starting_date = $_POST['starting_date'];
    $end_date = $_POST['end_date'];
    $price = $_POST['price'];

    $sql = "INSERT INTO venue (event_name, sport_name, venue_address, starting_date, end_date, price) 
            VALUES ('$event_name', '$sport_name', '$venue_address', '$starting_date', '$end_date', '$price')";

    if ($conn->query($sql) === true) {
        // Redirect back to menu.php after successful insertion
        header("Location: menu.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sports Management System - Insert Event</title>
    <style>
        @import url('./global.css');

        h1 {
            color: #FF5500;
            text-align: center;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 50px;
        }

        .form-input {
            margin-bottom: 20px;
        }

        .form-input label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form-input input,
        .form-input textarea {
            padding: 5px;
            width: 300px;
            background-color: #333;
            color: #fff;
            border: none;
        }

        .insert-btn {
            display: flex;
            justify-content: center;
            margin-bottom: 10px;
        }

        .button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #FF5500;
            color: #fff;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #FFBB00;
        }

        .back-button {
            margin-top: 20px;
            background-color: #333;
            color: #fff;
            border: none;
            padding: 10px 20px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #555;
        }
    </style>
</head>

<body>
    <h1>Insert Event</h1>
    <div class="container">
        <form method="POST" action="">
            <div class="form-input">
                <label for="event_name">Event Name:</label>
                <input type="text" id="event_name" name="event_name" required>
            </div>
            <div class="form-input">
                <label for="sport_name">Sport Name:</label>
                <input type="text" id="sport_name" name="sport_name" required>
            </div>
            <div class="form-input">
                <label for="venue_address">Venue Address:</label>
                <textarea id="venue_address" name="venue_address" required></textarea>
            </div>
            <div class="form-input">
                <label for="starting_date">Starting Date:</label>
                <input type="date" id="starting_date" name="starting_date" required>
            </div>
            <div class="form-input">
                <label for="end_date">End Date:</label>
                <input type="date" id="end_date" name="end_date" required>
            </div>
            <div class="form-input">
                <label for="price">Price:</label>
                <input type="number" id="price" name="price" required>
            </div>
            <div class="insert-btn">
                <button type="submit" class="button">Insert</button>
            </div>
        </form>
        <a href="menu.php" class="back-button">Back to Menu</a>
    </div>
</body>

</html>
