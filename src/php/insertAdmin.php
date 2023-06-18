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
    $uname = $_POST['uname'];
    $pwd = $_POST['pwd'];

    $sql = "INSERT INTO login (uname, pwd) VALUES ('$uname', '$pwd')";

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
    <title>Sports Management System - Insert Admin</title>
    <style>
        @import url('./global.css');

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

        .form-input input {
            padding: 5px;
            width: 300px;
            background-color: #333;
            color: #fff;
            border: none;
        }

        .insert-btn {
            display: flex;
            justify-content: center;

        }

        .button {
            padding: 10px 20px;
            font-size: 18px;
            background-color: #FF5500;
            color: #FFFFFF;
            border: none;
            cursor: pointer;
            text-decoration: none;
            border-radius: 5px;
        }

        .button:hover {
            background-color: #FFBB00;
        }

        .back-button {
            display: block;
            width: 120px;
            margin-top: 20px;
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
    <h1>Insert Admin</h1>
    <div class="container">
        <form method="POST" action="">
            <div class="form-input">
                <label for="uname">Username:</label>
                <input type="text" id="uname" name="uname" required>
            </div>
            <div class="form-input">
                <label for="pwd">Password:</label>
                <input type="password" id="pwd" name="pwd" required>
            </div>
            <div class="insert-btn">
                <button type="submit" class="button">Insert</button>
            </div>
        </form>
        <a href="menu.php" class="back-button">Back to Menu</a>
    </div>
</body>

</html>
